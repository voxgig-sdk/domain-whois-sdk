import { DomainWhoisEntityBase } from '../DomainWhoisEntityBase';
import type { DomainWhoisSDK } from '../DomainWhoisSDK';
import type { Control } from '../types';
import type { Redact, RedactCreateData } from '../DomainWhoisTypes';
declare class RedactEntity extends DomainWhoisEntityBase<Redact> {
    constructor(client: DomainWhoisSDK, entopts: any);
    make(this: RedactEntity): RedactEntity;
    create(this: any, reqdata?: RedactCreateData, ctrl?: Control): Promise<RedactEntity>;
}
export { RedactEntity };
