import { ErrorResponse } from './error-response.interface';
export interface ServiceError<T> {
    type: 'error';
    status: number;
    statusText: string;
    message: string;
    errors?: ErrorResponse[];
    data?: T;
}
