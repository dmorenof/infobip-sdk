<?php

declare(strict_types=1);

namespace InfobipSDK\Requests\AllOfUpdate2faApplicationBody;

final class ApplicationBodyRequest extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'name',
];

    protected const array WRITE_ONLY_FIELDS = [
    'configuration',
    'enabled',
    'name',
];

    /**
     * Created 2FA application configuration.
     */
    public \InfobipSDK\DTOs\N17363474057d152577564d8587b079aa7bdd070a3f49746aea3319eb57a5830c\ApplicationConfiguration $configuration;
    /**
     * Indicates whether the created application is enabled.
     */
    public bool $enabled;
    /**
     * 2FA application name.
     */
    public string $name;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'configuration' => $value instanceof \stdClass ? $this->configuration = new \InfobipSDK\DTOs\N17363474057d152577564d8587b079aa7bdd070a3f49746aea3319eb57a5830c\ApplicationConfiguration($value) : parent::assignMember($name, $value),
            'enabled' => is_bool($value) ? $this->enabled = $value : parent::assignMember($name, $value),
            'name' => is_string($value) ? $this->name = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
