import { AuthenticationResponse } from './../models/authentication/authentication-response.interface';

export class AuthenticationService {

    private static authentication?: AuthenticationResponse = null;
    private static readonly authenticationToken = 'authentication';

    public static getAuthentication(): AuthenticationResponse {
        let credentials = AuthenticationService.authentication;

        if (!credentials) {
            const savedCredentials = sessionStorage.getItem(this.authenticationToken);
            if (savedCredentials) {
                credentials = AuthenticationService.authentication = JSON.parse(savedCredentials);
            }
        }

        return credentials;
    }

    public static isAuthenticated(): boolean {
        const auth = AuthenticationService.getAuthentication();

        let expired = false;
        if ((!!auth?.expires_at) && auth?.expires_at < new Date(Date.now())) {
            expired = true;
        }

        return !!auth && !!auth.token && !expired;
    }
}
