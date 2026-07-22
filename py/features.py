# DomainWhois SDK feature factory

from feature.base_feature import DomainWhoisBaseFeature
from feature.test_feature import DomainWhoisTestFeature


def _make_feature(name):
    features = {
        "base": lambda: DomainWhoisBaseFeature(),
        "test": lambda: DomainWhoisTestFeature(),
    }
    factory = features.get(name)
    if factory is not None:
        return factory()
    return features["base"]()
