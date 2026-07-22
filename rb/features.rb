# DomainWhois SDK feature factory

require_relative 'feature/base_feature'
require_relative 'feature/test_feature'


module DomainWhoisFeatures
  def self.make_feature(name)
    case name
    when "base"
      DomainWhoisBaseFeature.new
    when "test"
      DomainWhoisTestFeature.new
    else
      DomainWhoisBaseFeature.new
    end
  end
end
