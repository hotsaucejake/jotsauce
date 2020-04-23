import { ApiResponse } from '../api-resonse.interface';

export interface AuthResponse extends ApiResponse {
    data: {
        data: {
            token: string;
            token_type: string;
            expires_at: Date;
        };
    };
}
