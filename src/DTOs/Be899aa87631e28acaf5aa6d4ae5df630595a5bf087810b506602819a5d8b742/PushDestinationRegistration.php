<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\Be899aa87631e28acaf5aa6d4ae5df630595a5bf087810b506602819a5d8b742;

/**
 * PushDestinationRegistration
 *
 * Single Recipient Destination [more](https://www.infobip.com/docs/mobile-push/mobile-push-over-api#send-push-over-api-destination)
 */
final class PushDestinationRegistration extends \InfobipSDK\DTOs\Be899aa87631e28acaf5aa6d4ae5df630595a5bf087810b506602819a5d8b742\PushDestination
{
    public const array REQUIRED_FIELDS = [
        'type',
    ];

    protected const array VALIDATION = [
        'pushRegistrationId' => [
            'minLength' => 1,
        ],
    ];

    protected const string ADDITIONAL_PROPERTIES_TYPE = 'mixed';
    protected const bool ADDITIONAL_PROPERTIES_NULLABLE = false;

    /**
     * Define the ID that uniquely identifies the message sent (optional).
     */
    public string $messageId;
    /**
     * Push Registration Id is a unique ID which identifies application instance and specific device
     */
    public string $pushRegistrationId {
        set {
            $this->assigning('pushRegistrationId', $value);
            $this->pushRegistrationId = $value;
        }
    }
    /**
     * Set to true to only send messages to push devices which are marked as primary devices. By default, messages will be sent to all targeted devices, including both primary and non-primary.
     */
    public bool $targetOnlyPrimaryDevices;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'messageId' => is_string($value) ? $this->messageId = $value : parent::assignMember($name, $value),
            'pushRegistrationId' => is_string($value) ? $this->pushRegistrationId = $value : parent::assignMember($name, $value),
            'targetOnlyPrimaryDevices' => is_bool($value) ? $this->targetOnlyPrimaryDevices = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
