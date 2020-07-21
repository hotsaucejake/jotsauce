import { BaseService } from './_base.service';
import { UserCredentials } from '../models/authentication/user-credentials.interface';
import { ServiceResponse } from './models/service-response.interface';
import { AuthenticationResponse } from '../models/authentication/authentication-response.interface';
import { AuthenticationService } from '../authentication/authentication.service';
import { Injectable } from '@angular/core';

@Injectable({ providedIn: 'root' })
export class AuthService extends BaseService {

    private async csrfCookie(): Promise<void> {
        const response = await this.getAsync('sanctum/csrf-cookie');
    }

    public async login(authModel: UserCredentials, remember: boolean): Promise<ServiceResponse<AuthenticationResponse>> {
        this.csrfCookie();
        const response = await this.postAsync<AuthenticationResponse>('api/auth/login', authModel);

        if (response.type === 'data') {
            AuthenticationService.setAuthentication(response.data, remember);
        }

        if (remember) {
            localStorage.setItem('email', authModel.email);
        } else {
            localStorage.removeItem('email');
        }

        return response;
    }


    public async logout(): Promise<ServiceResponse<void>> {

        const response = await this.getAsync<void>('api/auth/logout');
        if (response.type === 'data') {
            AuthenticationService.clearAuthentication();
        }

        return response;
    }

}