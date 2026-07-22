<?php
declare(strict_types=1);

// DomainWhois SDK base feature

class DomainWhoisBaseFeature
{
    public string $version;
    public string $name;
    public bool $active;

    // Positions this feature when added via the client `extend` option:
    // "__before__" / "__after__" / "__replace__" name an already-added
    // feature (mirrors the ts feature `_options`). Declared so setting it
    // on an extension instance avoids the dynamic-property deprecation.
    public ?array $_options = null;

    public function __construct()
    {
        $this->version = '0.0.1';
        $this->name = 'base';
        $this->active = true;
    }

    public function get_version(): string { return $this->version; }
    public function get_name(): string { return $this->name; }
    public function get_active(): bool { return $this->active; }

    public function init(DomainWhoisContext $ctx, array $options): void {}
    public function PostConstruct(DomainWhoisContext $ctx): void {}
    public function PostConstructEntity(DomainWhoisContext $ctx): void {}
    public function SetData(DomainWhoisContext $ctx): void {}
    public function GetData(DomainWhoisContext $ctx): void {}
    public function GetMatch(DomainWhoisContext $ctx): void {}
    public function SetMatch(DomainWhoisContext $ctx): void {}
    public function PrePoint(DomainWhoisContext $ctx): void {}
    public function PreSpec(DomainWhoisContext $ctx): void {}
    public function PreRequest(DomainWhoisContext $ctx): void {}
    public function PreResponse(DomainWhoisContext $ctx): void {}
    public function PreResult(DomainWhoisContext $ctx): void {}
    public function PreDone(DomainWhoisContext $ctx): void {}
    public function PreUnexpected(DomainWhoisContext $ctx): void {}
}
