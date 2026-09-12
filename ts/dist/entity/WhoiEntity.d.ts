import { DomainWhoisEntityBase } from '../DomainWhoisEntityBase';
import type { DomainWhoisSDK } from '../DomainWhoisSDK';
import type { Control } from '../types';
import type { Whoi, WhoiListMatch } from '../DomainWhoisTypes';
declare class WhoiEntity extends DomainWhoisEntityBase<Whoi> {
    constructor(client: DomainWhoisSDK, entopts: any);
    make(this: WhoiEntity): WhoiEntity;
    list(this: any, reqmatch?: WhoiListMatch, ctrl?: Control): Promise<WhoiEntity[]>;
}
export { WhoiEntity };
