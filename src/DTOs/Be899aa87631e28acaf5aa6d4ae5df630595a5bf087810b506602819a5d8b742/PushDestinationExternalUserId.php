<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\Be899aa87631e28acaf5aa6d4ae5df630595a5bf087810b506602819a5d8b742;

/**
 * PushDestinationExternalUserId
 *
 * Single Recipient Destination [more](https://www.infobip.com/docs/mobile-push/mobile-push-over-api#send-push-over-api-destination)
 */
final class PushDestinationExternalUserId extends \InfobipSDK\DTOs\Be899aa87631e28acaf5aa6d4ae5df630595a5bf087810b506602819a5d8b742\PushDestination
{
    public const array REQUIRED_FIELDS = [
    'type',
];

    protected const array VALIDATION = [
    'externalUserId' => [
        'minLength' => 1,
    ],
];

    protected const string ADDITIONAL_PROPERTIES_TYPE = 'mixed';
    protected const bool ADDITIONAL_PROPERTIES_NULLABLE = false;

    /**
     * External user ID set in User Profile
     */
    public string $externalUserId {
        set {
            $this->assigning('externalUserId', $value);
            $this->externalUserId = $value;
        }
    }
    /**
     * Define ID that uniquely identifies the message sent (optional).
     */
    public string $messageId;
    /**
     * Set to true to only send messages to push devices which are marked as primary devices. By default, messages will be sent to all targeted devices, including both primary and non-primary.
     */
    public bool $targetOnlyPrimaryDevices;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'externalUserId' => is_string($value) ? $this->externalUserId = $value : parent::assignMember($name, $value),
            'messageId' => is_string($value) ? $this->messageId = $value : parent::assignMember($name, $value),
            'targetOnlyPrimaryDevices' => is_bool($value) ? $this->targetOnlyPrimaryDevices = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
