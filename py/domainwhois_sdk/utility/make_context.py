# DomainWhois SDK utility: make_context

from domainwhois_sdk.core.context import DomainWhoisContext


def make_context_util(ctxmap, basectx):
    return DomainWhoisContext(ctxmap, basectx)
