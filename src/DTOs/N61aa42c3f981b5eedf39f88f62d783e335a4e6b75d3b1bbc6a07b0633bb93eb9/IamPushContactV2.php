<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N61aa42c3f981b5eedf39f88f62d783e335a4e6b75d3b1bbc6a07b0633bb93eb9;

/**
 * IamPushContactV2
 */
final class IamPushContactV2 extends \Dmorenof\SdkRuntime\DTO
{
    protected const array READ_ONLY_FIELDS = [
        'additionalData',
        'applicationId',
        'isPrimary',
        'registrationId',
        'systemData',
    ];

    /**
     * Additional data collected from the user's profile
     */
    public \InfobipSDK\DTOs\N61aa42c3f981b5eedf39f88f62d783e335a4e6b75d3b1bbc6a07b0633bb93eb9\IamPushContactV2\AdditionalDataMap $additionalData;
    /**
     * Application Id on which the user is subscribed.
     */
    public string $applicationId;
    /**
     * Set to true if this device is a primary device of a user among other devices.
     */
    public bool $isPrimary;
    /**
     * Push registration ID.
     */
    public string $registrationId;
    /**
     * System data collected from the user's profile
     */
    public \InfobipSDK\DTOs\N61aa42c3f981b5eedf39f88f62d783e335a4e6b75d3b1bbc6a07b0633bb93eb9\IamPushContactV2\SystemDataMap $systemData;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'applicationId' => is_string($value) ? $this->applicationId = $value : parent::assignMember($name, $value),
            'isPrimary' => is_bool($value) ? $this->isPrimary = $value : parent::assignMember($name, $value),
            'registrationId' => is_string($value) ? $this->registrationId = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
