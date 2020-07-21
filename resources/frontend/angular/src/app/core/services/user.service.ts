import { BaseService } from './_base.service';
import { ServiceResponse } from './models/service-response.interface';
import { User } from '../models/user.interface';
import { Injectable } from '@angular/core';

@Injectable({ providedIn: 'root' })
export class UserService extends BaseService {

    public async getUser(): Promise<ServiceResponse<User>> {
        const response = this.getAsync<User>(`api/auth/user`);

        return response;
    }
}