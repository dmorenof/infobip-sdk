<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\C458987719005e1c822046538c51d16d2c79d2de6023cbe1c10ca159b32352d7;

/**
 * RinglessVoicemailMessageStatus
 *
 * Acceptance status for a single message.
 */
final class RinglessVoicemailMessageStatus extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'messageId',
    'status',
    'to',
];

    /**
     * Unique ID that identifies the message sent. Use this to track delivery status.
     * Example: "2250be2d4219-3af1-78856-aabe-1362af1edfd2"
     */
    public string $messageId;
    public \InfobipSDK\DTOs\C458987719005e1c822046538c51d16d2c79d2de6023cbe1c10ca159b32352d7\MessageStatus $status;
    /**
     * Recipient phone number.
     * Example: "13125551234"
     */
    public string $to;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'messageId' => is_string($value) ? $this->messageId = $value : parent::assignMember($name, $value),
            'status' => $value instanceof \stdClass ? $this->status = new \InfobipSDK\DTOs\C458987719005e1c822046538c51d16d2c79d2de6023cbe1c10ca159b32352d7\MessageStatus($value) : parent::assignMember($name, $value),
            'to' => is_string($value) ? $this->to = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
