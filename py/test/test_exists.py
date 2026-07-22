# ProjectName SDK exists test

import pytest
from domainwhois_sdk import DomainWhoisSDK


class TestExists:

    def test_should_create_test_sdk(self):
        testsdk = DomainWhoisSDK.test(None, None)
        assert testsdk is not None
