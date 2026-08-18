package voxgigdomainwhoissdk

import (
	"github.com/voxgig-sdk/domain-whois-sdk/go/core"
	"github.com/voxgig-sdk/domain-whois-sdk/go/entity"
	"github.com/voxgig-sdk/domain-whois-sdk/go/feature"
	_ "github.com/voxgig-sdk/domain-whois-sdk/go/utility"
)

// Type aliases preserve external API.
type DomainWhoisSDK = core.DomainWhoisSDK
type Context = core.Context
type Utility = core.Utility
type Feature = core.Feature
type Entity = core.Entity
type DomainWhoisEntity = core.DomainWhoisEntity
type FetcherFunc = core.FetcherFunc
type Spec = core.Spec
type Result = core.Result
type Response = core.Response
type Operation = core.Operation
type Control = core.Control
type DomainWhoisError = core.DomainWhoisError

// BaseFeature from feature package.
type BaseFeature = feature.BaseFeature

func init() {
	core.NewBaseFeatureFunc = func() core.Feature {
		return feature.NewBaseFeature()
	}
	core.NewTestFeatureFunc = func() core.Feature {
		return feature.NewTestFeature()
	}
	core.NewDnsResultEntityFunc = func(client *core.DomainWhoisSDK, entopts map[string]any) core.DomainWhoisEntity {
		return entity.NewDnsResultEntity(client, entopts)
	}
	core.NewDomainEntityFunc = func(client *core.DomainWhoisSDK, entopts map[string]any) core.DomainWhoisEntity {
		return entity.NewDomainEntity(client, entopts)
	}
	core.NewEmailValidateEntityFunc = func(client *core.DomainWhoisSDK, entopts map[string]any) core.DomainWhoisEntity {
		return entity.NewEmailValidateEntity(client, entopts)
	}
	core.NewGenerateEntityFunc = func(client *core.DomainWhoisSDK, entopts map[string]any) core.DomainWhoisEntity {
		return entity.NewGenerateEntity(client, entopts)
	}
	core.NewGrammarEntityFunc = func(client *core.DomainWhoisSDK, entopts map[string]any) core.DomainWhoisEntity {
		return entity.NewGrammarEntity(client, entopts)
	}
	core.NewIpnEntityFunc = func(client *core.DomainWhoisSDK, entopts map[string]any) core.DomainWhoisEntity {
		return entity.NewIpnEntity(client, entopts)
	}
	core.NewRedactEntityFunc = func(client *core.DomainWhoisSDK, entopts map[string]any) core.DomainWhoisEntity {
		return entity.NewRedactEntity(client, entopts)
	}
	core.NewSslEntityFunc = func(client *core.DomainWhoisSDK, entopts map[string]any) core.DomainWhoisEntity {
		return entity.NewSslEntity(client, entopts)
	}
	core.NewUtilityEntityFunc = func(client *core.DomainWhoisSDK, entopts map[string]any) core.DomainWhoisEntity {
		return entity.NewUtilityEntity(client, entopts)
	}
	core.NewWhoiEntityFunc = func(client *core.DomainWhoisSDK, entopts map[string]any) core.DomainWhoisEntity {
		return entity.NewWhoiEntity(client, entopts)
	}
}

// Constructor re-exports.
var NewDomainWhoisSDK = core.NewDomainWhoisSDK
var TestSDK = core.TestSDK
var NewContext = core.NewContext
var NewSpec = core.NewSpec
var NewResult = core.NewResult
var NewResponse = core.NewResponse
var NewOperation = core.NewOperation
var MakeConfig = core.MakeConfig
var SharedConfig = core.SharedConfig

// No-arg convenience constructors. Go has no default-argument syntax,
// so these aliases let callers write `sdk.New()` / `sdk.Test()`
// instead of `sdk.NewDomainWhoisSDK(nil)` / `sdk.TestSDK(nil, nil)`
// for the common no-options case.
func New() *DomainWhoisSDK  { return NewDomainWhoisSDK(nil) }
func Test() *DomainWhoisSDK { return TestSDK(nil, nil) }
var NewBaseFeature = feature.NewBaseFeature
var NewTestFeature = feature.NewTestFeature
