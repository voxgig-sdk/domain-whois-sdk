import { Context } from './Context';
declare class DomainWhoisError extends Error {
    isDomainWhoisError: boolean;
    sdk: string;
    code: string;
    ctx: Context;
    status: number;
    get notFound(): boolean;
    constructor(code: string, msg: string, ctx: Context);
}
export { DomainWhoisError };
