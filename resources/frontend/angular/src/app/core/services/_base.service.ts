import { AuthenticationService } from './../authentication/authentication.service';
import { environment } from './../../../environments/environment';
import { Injectable } from '@angular/core';
import axios, { AxiosError, AxiosRequestConfig } from 'axios';
import { ServiceError } from './models/service-error.interface';
import { ServiceData } from './models/service-data.interface';
import { ServiceResponse } from './models/service-response.interface';
import { ErrorResponse } from './models/error-response.interface';

@Injectable()
export abstract class BaseService {

    protected createFullyQualifiedUrl(endpoint: string): string {
        return `${environment.apiBaseUrl}/${endpoint}`;
    }


    private createError<T>(error: AxiosError): ServiceError<T> {
        const retError = {
            type: 'error'
        } as ServiceError<T>;

        if (!!error.response) {
            retError.status = error.response.status;
            retError.statusText = error.response.statusText;
            retError.message = error.response.data.message;

            if (error.response?.data.errors) {
                retError.errors = [];
                Object.keys(error.response.data.errors).forEach(key => {
                    error.response?.data.errors[key].forEach((errorMessage: string) => {
                        retError.errors?.push({
                            name: key,
                            error: errorMessage
                        } as ErrorResponse);
                    });
                });
            }

            if (retError.status === 401) {
                AuthenticationService.clearAuthentication();
            } else if (retError.status === 403) {
                // do something
            }
        }

        return retError;
    }


    private createData<T>(data: T): ServiceData<T> {
        return {
            type: 'data',
            data
        } as ServiceData<T>;
    }


    protected async postAsync<T>(endpoint: string, body?: {}): Promise<ServiceResponse<T>> {
        let retResp = {} as ServiceResponse<T>;

        try {
            const resp = await axios.post<T>(
                this.createFullyQualifiedUrl(endpoint),
                body,
                this.createRequestConfig()
            );
            retResp = this.createData(resp.data);
        } catch (e) {
            retResp = this.createError<T>(e as AxiosError<T>);
        }

        return retResp;
    }


    protected async getAsync<T>(endpoint: string): Promise<ServiceResponse<T>> {
        let retResp = {} as ServiceResponse<T>;

        try {
            const resp = await axios.get<T>(
                this.createFullyQualifiedUrl(endpoint),
                this.createRequestConfig()
            );
            retResp = this.createData(resp.data);
        } catch (e) {
            retResp = this.createError<T>(e);
        }

        return retResp;
    }


    protected async putAsync<T>(endpoint: string, body?: {}): Promise<ServiceResponse<T>> {
        let retResp = {} as ServiceResponse<T>;

        try {
            const resp = await axios.put<T>(
                this.createFullyQualifiedUrl(endpoint),
                body,
                this.createRequestConfig()
            );
            retResp = this.createData(resp.data);
        } catch (e) {
            retResp = this.createError<T>(e as AxiosError<T>);
        }

        return retResp;
    }


    protected async deleteAsync<T>(endpoint: string): Promise<ServiceResponse<T>> {
        let retResp = {} as ServiceResponse<T>;

        try {
            const resp = await axios.delete<T>(
                this.createFullyQualifiedUrl(endpoint),
                this.createRequestConfig()
            );
            retResp = this.createData(resp.data);
        } catch (e) {
            retResp = this.createError<T>(e as AxiosError<T>);
        }

        return retResp;
    }


    private createRequestConfig<T>(): AxiosRequestConfig {
        const config = {} as AxiosRequestConfig;

        config.transformResponse = (data) => {
            return this.deserialize(data);
        };

        if (AuthenticationService.isAuthenticated()) {
            config.headers = {
                Authorization: `Bearer ${AuthenticationService.getAuthentication().plainTextToken}`
            };

            if (environment.production) {
                config.withCredentials = true;
            }
        }

        return config;
    }


    private deserialize<T>(data: string): T {
        return JSON.parse(data, this.reviveDateTime) as T;
    }

    /* tslint:disable:no-any */
    private reviveDateTime(key: any, value: any): any {
        if (typeof value === 'string') {
            const a = /^(\d{4})-(\d{2})-(\d{2})T(\d{2}):(\d{2}):(\d{2}(?:\.\d*)?)(?:([\+-])(\d{2})\:(\d{2}))?Z?$/.exec(value);
            if (a) {
                const utcMilliseconds = Date.UTC(+a[1], +a[2] - 1, +a[3], +a[4], +a[5], +a[6]);
                return new Date(utcMilliseconds);
            }
        }
        return value;
    }
    /* tslint:enable:no-any */

}
