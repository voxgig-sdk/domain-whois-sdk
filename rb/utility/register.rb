# DomainWhois SDK utility registration
require_relative '../core/utility_type'
require_relative 'clean'
require_relative 'done'
require_relative 'make_error'
require_relative 'feature_add'
require_relative 'feature_hook'
require_relative 'feature_init'
require_relative 'fetcher'
require_relative 'make_fetch_def'
require_relative 'make_context'
require_relative 'make_options'
require_relative 'make_request'
require_relative 'make_response'
require_relative 'make_result'
require_relative 'make_point'
require_relative 'make_spec'
require_relative 'make_url'
require_relative 'param'
require_relative 'prepare_auth'
require_relative 'prepare_body'
require_relative 'prepare_headers'
require_relative 'prepare_method'
require_relative 'prepare_params'
require_relative 'prepare_path'
require_relative 'prepare_query'
require_relative 'graphql'
require_relative 'result_basic'
require_relative 'result_body'
require_relative 'result_headers'
require_relative 'transform_request'
require_relative 'transform_response'

DomainWhoisUtility.registrar = ->(u) {
  u.clean = DomainWhoisUtilities::Clean
  u.done = DomainWhoisUtilities::Done
  u.make_error = DomainWhoisUtilities::MakeError
  u.feature_add = DomainWhoisUtilities::FeatureAdd
  u.feature_hook = DomainWhoisUtilities::FeatureHook
  u.feature_init = DomainWhoisUtilities::FeatureInit
  u.fetcher = DomainWhoisUtilities::Fetcher
  u.make_fetch_def = DomainWhoisUtilities::MakeFetchDef
  u.make_context = DomainWhoisUtilities::MakeContext
  u.make_options = DomainWhoisUtilities::MakeOptions
  u.make_request = DomainWhoisUtilities::MakeRequest
  u.make_response = DomainWhoisUtilities::MakeResponse
  u.make_result = DomainWhoisUtilities::MakeResult
  u.make_point = DomainWhoisUtilities::MakePoint
  u.make_spec = DomainWhoisUtilities::MakeSpec
  u.make_url = DomainWhoisUtilities::MakeUrl
  u.param = DomainWhoisUtilities::Param
  u.prepare_auth = DomainWhoisUtilities::PrepareAuth
  u.prepare_body = DomainWhoisUtilities::PrepareBody
  u.prepare_headers = DomainWhoisUtilities::PrepareHeaders
  u.prepare_method = DomainWhoisUtilities::PrepareMethod
  u.prepare_params = DomainWhoisUtilities::PrepareParams
  u.prepare_path = DomainWhoisUtilities::PreparePath
  u.prepare_query = DomainWhoisUtilities::PrepareQuery
  u.graphql_body = DomainWhoisUtilities::GraphqlBody
  u.graphql_errors = DomainWhoisUtilities::GraphqlErrors
  u.result_basic = DomainWhoisUtilities::ResultBasic
  u.result_body = DomainWhoisUtilities::ResultBody
  u.result_headers = DomainWhoisUtilities::ResultHeaders
  u.transform_request = DomainWhoisUtilities::TransformRequest
  u.transform_response = DomainWhoisUtilities::TransformResponse
}
