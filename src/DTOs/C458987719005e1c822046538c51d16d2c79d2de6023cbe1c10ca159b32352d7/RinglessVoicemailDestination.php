<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\C458987719005e1c822046538c51d16d2c79d2de6023cbe1c10ca159b32352d7;

/**
 * RinglessVoicemailDestination
 *
 * Recipient phone number.
 */
final class RinglessVoicemailDestination extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'to',
];

    protected const array VALIDATION = [
    'to' => [
        'minLength' => 1,
        'pattern' => '\\+?[1-9]\\d{7,14}',
    ],
];

    /**
     * The ID that uniquely identifies the message sent. If not provided, one will be auto-generated.
     * Example: "my-message-123"
     */
    public string $messageId;
    /**
     * US or CA mobile phone number in E.164 format.
     * Example: "13125551234"
     */
    public string $to {
        set {
            $this->assigning('to', $value);
            $this->to = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'messageId' => is_string($value) ? $this->messageId = $value : parent::assignMember($name, $value),
            'to' => is_string($value) ? $this->to = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
