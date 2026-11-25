<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\B19dbfd240ca6293d80ae57437ec266d186a81682210bc56a1b7636c4c62d0e7;

/**
 * CommonPushContact
 */
final class CommonPushContact extends \Dmorenof\SdkRuntime\DTO
{
    protected const array READ_ONLY_FIELDS = [
    'additionalData',
    'applicationId',
    'registrationId',
    'systemData',
];

    /**
     * Additional data collected from the user's profile
     */
    public \InfobipSDK\DTOs\B19dbfd240ca6293d80ae57437ec266d186a81682210bc56a1b7636c4c62d0e7\CommonPushContact\AdditionalDataMap $additionalData;
    /**
     * Application Id on which the user is subscribed.
     */
    public string $applicationId;
    /**
     * Push registration ID.
     */
    public string $registrationId;
    /**
     * System data collected from the user's profile
     */
    public \InfobipSDK\DTOs\B19dbfd240ca6293d80ae57437ec266d186a81682210bc56a1b7636c4c62d0e7\CommonPushContact\SystemDataMap $systemData;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'applicationId' => is_string($value) ? $this->applicationId = $value : parent::assignMember($name, $value),
            'registrationId' => is_string($value) ? $this->registrationId = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
