<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N900634339512041dd9c6cd5c4ad62d6cf43ea57e0548f5deeceb9f79d92b92f0;

/**
 * CommonPushContact
 *
 * A list of person's web push destinations.
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
     * Unique user ID for a person.
     */
    public \InfobipSDK\DTOs\N900634339512041dd9c6cd5c4ad62d6cf43ea57e0548f5deeceb9f79d92b92f0\CommonPushContact\AdditionalDataMap $additionalData;
    /**
     * Application Id on which the user is subscribed.
     */
    public string $applicationId;
    /**
     * Push registration ID.
     */
    public string $registrationId;
    /**
     * System data collected from the user's profile.
     */
    public \InfobipSDK\DTOs\N900634339512041dd9c6cd5c4ad62d6cf43ea57e0548f5deeceb9f79d92b92f0\CommonPushContact\SystemDataMap $systemData;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'applicationId' => is_string($value) ? $this->applicationId = $value : parent::assignMember($name, $value),
            'registrationId' => is_string($value) ? $this->registrationId = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
