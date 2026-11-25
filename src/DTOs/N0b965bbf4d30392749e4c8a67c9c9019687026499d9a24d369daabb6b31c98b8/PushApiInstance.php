<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N0b965bbf4d30392749e4c8a67c9c9019687026499d9a24d369daabb6b31c98b8;

/**
 * PushApiInstance
 */
final class PushApiInstance extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'applicationId',
    'registrationId',
];

    protected const array READ_ONLY_FIELDS = [
    'applicationId',
    'registrationId',
];

    /**
     * Custom attributes set for a device
     */
    public \InfobipSDK\DTOs\N0b965bbf4d30392749e4c8a67c9c9019687026499d9a24d369daabb6b31c98b8\PushApiInstance\AdditionalDataMap $additionalData;
    /**
     * String id of the application that the instance belongs to
     */
    public string $applicationId;
    /**
     * Set to `true` if this device is a primary device of a user among other devices
     */
    public bool $isPrimary;
    /**
     * Push registration id of the instance
     */
    public string $registrationId;
    public \InfobipSDK\DTOs\N0b965bbf4d30392749e4c8a67c9c9019687026499d9a24d369daabb6b31c98b8\PushApiInstanceSystemData $systemData;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'applicationId' => is_string($value) ? $this->applicationId = $value : parent::assignMember($name, $value),
            'isPrimary' => is_bool($value) ? $this->isPrimary = $value : parent::assignMember($name, $value),
            'registrationId' => is_string($value) ? $this->registrationId = $value : parent::assignMember($name, $value),
            'systemData' => $value instanceof \stdClass ? $this->systemData = new \InfobipSDK\DTOs\N0b965bbf4d30392749e4c8a67c9c9019687026499d9a24d369daabb6b31c98b8\PushApiInstanceSystemData($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
