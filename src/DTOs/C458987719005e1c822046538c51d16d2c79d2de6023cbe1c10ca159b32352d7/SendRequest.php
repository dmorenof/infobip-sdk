<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\C458987719005e1c822046538c51d16d2c79d2de6023cbe1c10ca159b32352d7;

/**
 * SendRequest
 *
 * Request to send ringless voicemail messages.
 */
final class SendRequest extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'message',
    ];

    /**
     * Unique ID assigned to this batch of messages. If not provided, one will be auto-generated.
     * Example: "my-campaign-001"
     */
    public string $bulkId;
    public \InfobipSDK\DTOs\C458987719005e1c822046538c51d16d2c79d2de6023cbe1c10ca159b32352d7\RinglessVoicemailMessage $message;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'bulkId' => is_string($value) ? $this->bulkId = $value : parent::assignMember($name, $value),
            'message' => $value instanceof \stdClass ? $this->message = new \InfobipSDK\DTOs\C458987719005e1c822046538c51d16d2c79d2de6023cbe1c10ca159b32352d7\RinglessVoicemailMessage($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
