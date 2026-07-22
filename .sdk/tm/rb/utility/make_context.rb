# DomainWhois SDK utility: make_context
require_relative '../core/context'
module DomainWhoisUtilities
  MakeContext = ->(ctxmap, basectx) {
    DomainWhoisContext.new(ctxmap, basectx)
  }
end
