# DomainWhois SDK utility: make_context

from projectname_sdk.core.context import DomainWhoisContext


def make_context_util(ctxmap, basectx):
    return DomainWhoisContext(ctxmap, basectx)
