import { BaseService } from './_base.service';
import { UserCredentials } from '../models/authentication/user-credentials.interface';
import { ServiceResponse } from './models/service-response.interface';
import { AuthenticationResponse } from '../models/authentication/authentication-response.interface';
import { AuthenticationService } from '../authentication/authentication.service';

export class AuthService extends BaseService {

    public async login(authModel: UserCredentials, remember: boolean): Promise<ServiceResponse<AuthenticationResponse>> {
        const response = await this.postAsync<AuthenticationResponse>('auth/login', authModel);
        

        if (response.type === 'data') {
            console.log('inside auth service login');
            console.log('response');
            console.log(response);
            console.log('response.data');
            console.log(response.data);
            AuthenticationService.setAuthentication(response.data, remember);

            if (remember) {
                localStorage.setItem('email', authModel.email);
            }
        }

        return response;
    }

    public logout(): void {
        AuthenticationService.clearAuthentication();
        // TODO: redirect user to login here
    }
}
