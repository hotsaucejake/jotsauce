import { ErrorResponse } from './error-response.interface';
export interface ServiceError {
    type: 'error';
    status: number;
    statusText: string;
    message: string;
    errors?: ErrorResponse[];
}
