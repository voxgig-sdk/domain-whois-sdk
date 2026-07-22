-- DomainWhois SDK exists test

local sdk = require("domain-whois_sdk")

describe("DomainWhoisSDK", function()
  it("should create test SDK", function()
    local testsdk = sdk.test(nil, nil)
    assert.is_not_nil(testsdk)
  end)
end)
