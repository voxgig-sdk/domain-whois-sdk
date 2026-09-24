"use strict";
Object.defineProperty(exports, "__esModule", { value: true });
exports.DomainWhoisError = void 0;
class DomainWhoisError extends Error {
    isDomainWhoisError = true;
    sdk = 'DomainWhois';
    code;
    ctx;
    status = -1;
    // `err.notFound` rather than a magic number at every call site.
    get notFound() { return 404 === this.status; }
    constructor(code, msg, ctx) {
        super(msg);
        this.code = code;
        this.ctx = ctx;
    }
}
exports.DomainWhoisError = DomainWhoisError;
//# sourceMappingURL=DomainWhoisError.js.map