import { DomainWhoisEntityBase } from '../DomainWhoisEntityBase';
import type { DomainWhoisSDK } from '../DomainWhoisSDK';
import type { Control } from '../types';
import type { EmailValidate, EmailValidateLoadMatch } from '../DomainWhoisTypes';
declare class EmailValidateEntity extends DomainWhoisEntityBase<EmailValidate> {
    constructor(client: DomainWhoisSDK, entopts: any);
    make(this: EmailValidateEntity): EmailValidateEntity;
    load(this: any, reqmatch?: EmailValidateLoadMatch, ctrl?: Control): Promise<EmailValidateEntity>;
}
export { EmailValidateEntity };
