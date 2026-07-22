<?php
declare(strict_types=1);

// DomainWhois SDK utility: result_headers

class DomainWhoisResultHeaders
{
    public static function call(DomainWhoisContext $ctx): ?DomainWhoisResult
    {
        $response = $ctx->response;
        $result = $ctx->result;
        if ($result) {
            if ($response && is_array($response->headers)) {
                $result->headers = $response->headers;
            } else {
                $result->headers = [];
            }
        }
        return $result;
    }
}
