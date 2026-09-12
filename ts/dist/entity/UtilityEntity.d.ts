import { DomainWhoisEntityBase } from '../DomainWhoisEntityBase';
import type { DomainWhoisSDK } from '../DomainWhoisSDK';
import type { Control } from '../types';
import type { Utility, UtilityLoadMatch } from '../DomainWhoisTypes';
declare class UtilityEntity extends DomainWhoisEntityBase<Utility> {
    constructor(client: DomainWhoisSDK, entopts: any);
    make(this: UtilityEntity): UtilityEntity;
    load(this: any, reqmatch?: UtilityLoadMatch, ctrl?: Control): Promise<UtilityEntity>;
}
export { UtilityEntity };
