# DomainWhois SDK utility: prepare_body
require_relative 'media'
module DomainWhoisUtilities
  PrepareBody = ->(ctx) {
    return nil unless ctx.op.input == "data"
    return DomainWhoisUtilities.raw_body(ctx.reqdata) if DomainWhoisUtilities.raw_request?(ctx.point)
    ctx.utility.transform_request.call(ctx)
  }
end
