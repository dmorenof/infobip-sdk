<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\C458987719005e1c822046538c51d16d2c79d2de6023cbe1c10ca159b32352d7;

/**
 * RinglessVoicemailMessage
 *
 * Message configuration for ringless voicemail.
 */
final class RinglessVoicemailMessage extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'content',
    'destinations',
    'sender',
];

    protected const array VALIDATION = [
    'destinations' => [
        'minItems' => 1,
        'maxItems' => 10000,
    ],
    'sender' => [
        'minLength' => 1,
        'pattern' => '\\+?[1-9]\\d{7,14}',
    ],
];

    public \InfobipSDK\DTOs\C458987719005e1c822046538c51d16d2c79d2de6023cbe1c10ca159b32352d7\RinglessVoicemailContent $content;
    /**
     * List of recipient phone numbers. Maximum 10,000 per request.
     */
    public \InfobipSDK\Collections\C458987719005e1c822046538c51d16d2c79d2de6023cbe1c10ca159b32352d7\RinglessVoicemailMessage\DestinationsCollection $destinations {
        set {
            $this->assigning('destinations', $value);
            $this->destinations = $value;
        }
    }
    /**
     * Webhook URL for receiving delivery reports.
     * Example: "https://example.com/dlr"
     */
    public string $notifyUrl;
    /**
     * Numeric phone number to display as the caller ID. Must be a valid US or CA number.
     * Example: "12125551234"
     */
    public string $sender {
        set {
            $this->assigning('sender', $value);
            $this->sender = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'destinations' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->destinations = new \InfobipSDK\Collections\C458987719005e1c822046538c51d16d2c79d2de6023cbe1c10ca159b32352d7\RinglessVoicemailMessage\DestinationsCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \InfobipSDK\DTOs\C458987719005e1c822046538c51d16d2c79d2de6023cbe1c10ca159b32352d7\RinglessVoicemailDestination::class)) : parent::assignMember($name, $value),
            'notifyUrl' => is_string($value) ? $this->notifyUrl = $value : parent::assignMember($name, $value),
            'sender' => is_string($value) ? $this->sender = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
