import { AccessToken } from './access-token.interface';

export interface AuthenticationResponse {
    accessToken: AccessToken,
    plainTextToken: string;
}
