<?php
declare(strict_types=1);

// DomainWhois SDK utility: make_context

require_once __DIR__ . '/../core/Context.php';

class DomainWhoisMakeContext
{
    public static function call(array $ctxmap, ?DomainWhoisContext $basectx): DomainWhoisContext
    {
        return new DomainWhoisContext($ctxmap, $basectx);
    }
}
