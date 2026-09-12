import { DomainWhoisEntityBase } from '../DomainWhoisEntityBase';
import type { DomainWhoisSDK } from '../DomainWhoisSDK';
import type { Control } from '../types';
import type { Domain, DomainListMatch } from '../DomainWhoisTypes';
declare class DomainEntity extends DomainWhoisEntityBase<Domain> {
    constructor(client: DomainWhoisSDK, entopts: any);
    make(this: DomainEntity): DomainEntity;
    list(this: any, reqmatch?: DomainListMatch, ctrl?: Control): Promise<DomainEntity[]>;
}
export { DomainEntity };
