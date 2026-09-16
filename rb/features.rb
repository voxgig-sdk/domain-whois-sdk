# DomainWhois SDK feature factory

require_relative 'feature/base_feature'
require_relative 'feature/ratelimit_feature'
require_relative 'feature/retry_feature'
require_relative 'feature/test_feature'
require_relative 'feature/timeout_feature'


module DomainWhoisFeatures
  def self.make_feature(name)
    case name
    when "base"
      DomainWhoisBaseFeature.new
    when "ratelimit"
      DomainWhoisRatelimitFeature.new
    when "retry"
      DomainWhoisRetryFeature.new
    when "test"
      DomainWhoisTestFeature.new
    when "timeout"
      DomainWhoisTimeoutFeature.new
    else
      DomainWhoisBaseFeature.new
    end
  end
end
