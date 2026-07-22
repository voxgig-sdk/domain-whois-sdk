<?php
declare(strict_types=1);

// DomainWhois SDK utility: feature_hook

class DomainWhoisFeatureHook
{
    public static function call(DomainWhoisContext $ctx, string $name): void
    {
        if (!$ctx->client) {
            return;
        }
        $features = $ctx->client->features ?? null;
        if (!$features) {
            return;
        }
        foreach ($features as $f) {
            if (method_exists($f, $name)) {
                $f->$name($ctx);
            }
        }
    }
}
