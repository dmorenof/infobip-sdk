<?php

declare(strict_types=1);

namespace InfobipSDK\Responses\Resource2fa\Resource2\Applications\Post;

final class Resource2ApplicationsResponse extends \Dmorenof\SdkRuntime\DTO
{
    protected const array READ_ONLY_FIELDS = [
        'applicationId',
        'configuration',
        'enabled',
        'name',
    ];

    /**
     * The ID of the application that represents your service, e.g. 2FA for login, 2FA for changing the password, etc.
     */
    public string $applicationId;
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
            'applicationId' => is_string($value) ? $this->applicationId = $value : parent::assignMember($name, $value),
            'configuration' => $value instanceof \stdClass ? $this->configuration = new \InfobipSDK\DTOs\N17363474057d152577564d8587b079aa7bdd070a3f49746aea3319eb57a5830c\ApplicationConfiguration($value) : parent::assignMember($name, $value),
            'enabled' => is_bool($value) ? $this->enabled = $value : parent::assignMember($name, $value),
            'name' => is_string($value) ? $this->name = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
