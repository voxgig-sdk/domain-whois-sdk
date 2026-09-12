import { DomainWhoisEntityBase } from '../DomainWhoisEntityBase';
import type { DomainWhoisSDK } from '../DomainWhoisSDK';
import type { Control } from '../types';
import type { Grammar, GrammarCreateData } from '../DomainWhoisTypes';
declare class GrammarEntity extends DomainWhoisEntityBase<Grammar> {
    constructor(client: DomainWhoisSDK, entopts: any);
    make(this: GrammarEntity): GrammarEntity;
    create(this: any, reqdata?: GrammarCreateData, ctrl?: Control): Promise<GrammarEntity>;
}
export { GrammarEntity };
