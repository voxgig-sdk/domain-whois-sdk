
import { Context } from './Context'


class DomainWhoisError extends Error {

  isDomainWhoisError = true

  sdk = 'DomainWhois'

  code: string
  ctx: Context

  constructor(code: string, msg: string, ctx: Context) {
    super(msg)
    this.code = code
    this.ctx = ctx
  }

}

export {
  DomainWhoisError
}

