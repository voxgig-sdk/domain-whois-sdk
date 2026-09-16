# DomainWhois SDK feature factory

from domainwhois_sdk.feature.base_feature import DomainWhoisBaseFeature
from domainwhois_sdk.feature.ratelimit_feature import DomainWhoisRatelimitFeature
from domainwhois_sdk.feature.retry_feature import DomainWhoisRetryFeature
from domainwhois_sdk.feature.test_feature import DomainWhoisTestFeature
from domainwhois_sdk.feature.timeout_feature import DomainWhoisTimeoutFeature


_FEATURES = {
    "base": lambda: DomainWhoisBaseFeature(),
    "ratelimit": lambda: DomainWhoisRatelimitFeature(),
    "retry": lambda: DomainWhoisRetryFeature(),
    "test": lambda: DomainWhoisTestFeature(),
    "timeout": lambda: DomainWhoisTimeoutFeature(),
}


def _make_feature(name):
    factory = _FEATURES.get(name)
    if factory is not None:
        return factory()
    return _FEATURES["base"]()


# True when this SDK was generated with the named feature class - the
# constructor's tolerance for extend-carried features reads this (an
# active name with no generated class must not become a BaseFeature
# stray when an extend instance carries it).
def _has_feature(name):
    return name in _FEATURES
