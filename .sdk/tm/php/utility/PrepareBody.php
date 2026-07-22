<?php
declare(strict_types=1);

// DomainWhois SDK utility: prepare_body

class DomainWhoisPrepareBody
{
    public static function call(DomainWhoisContext $ctx): mixed
    {
        if ($ctx->op->input === 'data') {
            return ($ctx->utility->transform_request)($ctx);
        }
        return null;
    }
}
