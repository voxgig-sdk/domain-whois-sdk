import { DomainWhoisEntityBase } from '../DomainWhoisEntityBase';
import type { DomainWhoisSDK } from '../DomainWhoisSDK';
import type { Control } from '../types';
import type { DnsResult, DnsResultLoadMatch } from '../DomainWhoisTypes';
declare class DnsResultEntity extends DomainWhoisEntityBase<DnsResult> {
    constructor(client: DomainWhoisSDK, entopts: any);
    make(this: DnsResultEntity): DnsResultEntity;
    load(this: any, reqmatch?: DnsResultLoadMatch, ctrl?: Control): Promise<DnsResultEntity>;
}
export { DnsResultEntity };
