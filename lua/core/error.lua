-- DomainWhois SDK error

local DomainWhoisError = {}
DomainWhoisError.__index = DomainWhoisError


function DomainWhoisError.new(code, msg, ctx)
  local self = setmetatable({}, DomainWhoisError)
  self.is_sdk_error = true
  self.sdk = "DomainWhois"
  self.code = code or ""
  self.msg = msg or ""
  self.ctx = ctx
  self.result = nil
  self.spec = nil
  return self
end


function DomainWhoisError:error()
  return self.msg
end


function DomainWhoisError:__tostring()
  return self.msg
end


return DomainWhoisError
