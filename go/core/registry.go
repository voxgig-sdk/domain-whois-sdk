package core

var UtilityRegistrar func(u *Utility)

var NewBaseFeatureFunc func() Feature

var NewTestFeatureFunc func() Feature

var NewDnsResultEntityFunc func(client *DomainWhoisSDK, entopts map[string]any) DomainWhoisEntity

var NewDomainEntityFunc func(client *DomainWhoisSDK, entopts map[string]any) DomainWhoisEntity

var NewEmailValidateEntityFunc func(client *DomainWhoisSDK, entopts map[string]any) DomainWhoisEntity

var NewGenerateEntityFunc func(client *DomainWhoisSDK, entopts map[string]any) DomainWhoisEntity

var NewGrammarEntityFunc func(client *DomainWhoisSDK, entopts map[string]any) DomainWhoisEntity

var NewIpnEntityFunc func(client *DomainWhoisSDK, entopts map[string]any) DomainWhoisEntity

var NewRedactEntityFunc func(client *DomainWhoisSDK, entopts map[string]any) DomainWhoisEntity

var NewSslEntityFunc func(client *DomainWhoisSDK, entopts map[string]any) DomainWhoisEntity

var NewUtilityEntityFunc func(client *DomainWhoisSDK, entopts map[string]any) DomainWhoisEntity

var NewWhoiEntityFunc func(client *DomainWhoisSDK, entopts map[string]any) DomainWhoisEntity

