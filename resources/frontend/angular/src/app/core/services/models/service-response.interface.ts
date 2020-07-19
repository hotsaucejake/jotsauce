import { ServiceData } from "./service-data.interface";
import { ServiceError } from "./service-error.interface";

export type ServiceResponse<T> = ServiceData<T> | ServiceError;