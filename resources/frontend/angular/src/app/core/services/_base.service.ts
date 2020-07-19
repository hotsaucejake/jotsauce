import { environment } from './../../../environments/environment';
import { Injectable } from '@angular/core';

@Injectable()
export abstract class BaseService {

    protected createFullyQualifiedUrl(endpoint: string): string {
        return `${environment.apiBaseUrl}/${endpoint}`;
    }

}