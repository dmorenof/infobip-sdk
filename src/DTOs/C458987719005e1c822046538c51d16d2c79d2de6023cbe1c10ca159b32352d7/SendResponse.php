<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\C458987719005e1c822046538c51d16d2c79d2de6023cbe1c10ca159b32352d7;

/**
 * SendResponse
 *
 * Response confirming that ringless voicemail messages have been accepted for delivery.
 */
final class SendResponse extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'bulkId',
    'messages',
];

    /**
     * Unique ID assigned to this batch of messages. Use this to fetch delivery reports.
     * Example: "my-campaign-001"
     */
    public string $bulkId;
    /**
     * Acceptance status for each destination.
     */
    public \InfobipSDK\Collections\C458987719005e1c822046538c51d16d2c79d2de6023cbe1c10ca159b32352d7\SendResponse\MessagesCollection $messages;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'bulkId' => is_string($value) ? $this->bulkId = $value : parent::assignMember($name, $value),
            'messages' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->messages = new \InfobipSDK\Collections\C458987719005e1c822046538c51d16d2c79d2de6023cbe1c10ca159b32352d7\SendResponse\MessagesCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \InfobipSDK\DTOs\C458987719005e1c822046538c51d16d2c79d2de6023cbe1c10ca159b32352d7\RinglessVoicemailMessageStatus::class)) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
