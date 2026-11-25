<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\Be899aa87631e28acaf5aa6d4ae5df630595a5bf087810b506602819a5d8b742;

/**
 * PushDestinationPhoneNumber
 *
 * Single Recipient Destination [more](https://www.infobip.com/docs/mobile-push/mobile-push-over-api#send-push-over-api-destination)
 */
final class PushDestinationPhoneNumber extends \InfobipSDK\DTOs\Be899aa87631e28acaf5aa6d4ae5df630595a5bf087810b506602819a5d8b742\PushDestination
{
    public const array REQUIRED_FIELDS = [
    'type',
];

    protected const array VALIDATION = [
    'phoneNumber' => [
        'minLength' => 1,
    ],
];

    protected const string ADDITIONAL_PROPERTIES_TYPE = 'mixed';
    protected const bool ADDITIONAL_PROPERTIES_NULLABLE = false;

    /**
     * Define ID that uniquely identifies the message sent (optional).
     */
    public string $messageId;
    /**
     * MSISDN in [international format](https://en.wikipedia.org/wiki/E.164) (Example: 41793026727)
     */
    public string $phoneNumber {
        set {
            $this->assigning('phoneNumber', $value);
            $this->phoneNumber = $value;
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
            'phoneNumber' => is_string($value) ? $this->phoneNumber = $value : parent::assignMember($name, $value),
            'targetOnlyPrimaryDevices' => is_bool($value) ? $this->targetOnlyPrimaryDevices = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
