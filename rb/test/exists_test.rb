# DomainWhois SDK exists test

require "minitest/autorun"
require_relative "../DomainWhois_sdk"

class ExistsTest < Minitest::Test
  def test_create_test_sdk
    testsdk = DomainWhoisSDK.test(nil, nil)
    assert !testsdk.nil?
  end
end
