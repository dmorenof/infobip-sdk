<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N1ed350d65e634c5446c08244298a26d3b0bb68a76782ab9246a8035f47d2421c;

/**
 * BlockingConfig
 *
 * A blocking configuration.
 */
final class BlockingConfig extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'configId',
    'enabled',
    'sensitivity',
];

    /**
     * External ID of the application this configuration applies to.
     * Example: "MyApplication1"
     */
    public string $application;
    /**
     * Unique identifier of the blocking configuration.
     * Example: "37B93F4D2BA3C58B58526EAEAA1AB35A"
     */
    public string $configId;
    /**
     * Indicates whether this blocking configuration is enabled.
     */
    public bool $enabled;
    /**
     * External ID of the entity this configuration applies to.
     * Example: "MyEntity1"
     */
    public string $entity;
    /**
     * Blocking sensitivity applied to this configuration. Sensitivity controls how much suspicious traffic is blocked, from VERY_STRICT (the most) to CONSERVATIVE (only high-confidence fraud).
     */
    public \InfobipSDK\Enums\N1ed350d65e634c5446c08244298a26d3b0bb68a76782ab9246a8035f47d2421c\BlockingConfig\SensitivityEnum $sensitivity;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'application' => is_string($value) ? $this->application = $value : parent::assignMember($name, $value),
            'configId' => is_string($value) ? $this->configId = $value : parent::assignMember($name, $value),
            'enabled' => is_bool($value) ? $this->enabled = $value : parent::assignMember($name, $value),
            'entity' => is_string($value) ? $this->entity = $value : parent::assignMember($name, $value),
            'sensitivity' => is_string($value) ? $this->sensitivity = \InfobipSDK\Enums\N1ed350d65e634c5446c08244298a26d3b0bb68a76782ab9246a8035f47d2421c\BlockingConfig\SensitivityEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
