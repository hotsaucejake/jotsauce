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

        const expired = ((!!auth?.expires_at) && auth?.expires_at < new Date(Date.now()))
                            ? true
                            : false;

        return !!auth && !!auth.token && !expired;
    }


    public static setAuthentication(authentication: AuthenticationResponse, remember?: boolean): void {
        if (!!authentication) {
            this.clearAuthentication();

            AuthenticationService.authentication = authentication;
            sessionStorage.setItem(AuthenticationService.authenticationToken, JSON.stringify(authentication));
            // localStorage.setItem(AuthenticationService.authenticationToken, JSON.stringify(authentication));
        }
    }


    public static clearAuthentication(): void {
        AuthenticationService.authentication = null;
        sessionStorage.removeItem(AuthenticationService.authenticationToken);
        // localStorage.removeItem(AuthenticationService.authenticationToken);
    }
}
