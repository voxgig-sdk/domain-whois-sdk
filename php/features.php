<?php
declare(strict_types=1);

// DomainWhois SDK feature factory

require_once __DIR__ . '/feature/BaseFeature.php';
require_once __DIR__ . '/feature/TestFeature.php';


class DomainWhoisFeatures
{
    public static function make_feature(string $name)
    {
        switch ($name) {
            case "base":
                return new DomainWhoisBaseFeature();
            case "test":
                return new DomainWhoisTestFeature();
            default:
                return new DomainWhoisBaseFeature();
        }
    }
}
