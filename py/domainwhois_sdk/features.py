# DomainWhois SDK feature factory

from domainwhois_sdk.feature.base_feature import DomainWhoisBaseFeature
from domainwhois_sdk.feature.test_feature import DomainWhoisTestFeature


def _make_feature(name):
    features = {
        "base": lambda: DomainWhoisBaseFeature(),
        "test": lambda: DomainWhoisTestFeature(),
    }
    factory = features.get(name)
    if factory is not None:
        return factory()
    return features["base"]()
