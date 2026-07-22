<?php
declare(strict_types=1);

// DomainWhois SDK utility: result_body

class DomainWhoisResultBody
{
    public static function call(DomainWhoisContext $ctx): ?DomainWhoisResult
    {
        $response = $ctx->response;
        $result = $ctx->result;
        if ($result && $response && $response->json_func && $response->body) {
            $result->body = ($response->json_func)();
        }
        return $result;
    }
}
