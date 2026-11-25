<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\B839d8c276f6f1ef62ce2dce758ba402953b31f455d6d08549a7147d79f50d62;

/**
 * RcsConversationStartedInfo
 *
 * Conversation details including type, ID, and time window.
 */
final class RcsConversationStartedInfo extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'endTime',
    'id',
    'startTime',
    'type',
];

    /**
     * Conversation end time.
     * Format: date-time
     */
    public string $endTime;
    /**
     * Unique conversation identifier.
     */
    public string $id;
    /**
     * Conversation start time.
     * Format: date-time
     */
    public string $startTime;
    public \InfobipSDK\Enums\B839d8c276f6f1ef62ce2dce758ba402953b31f455d6d08549a7147d79f50d62\RcsConversationType $type;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'endTime' => is_string($value) ? $this->endTime = $value : parent::assignMember($name, $value),
            'id' => is_string($value) ? $this->id = $value : parent::assignMember($name, $value),
            'startTime' => is_string($value) ? $this->startTime = $value : parent::assignMember($name, $value),
            'type' => is_string($value) ? $this->type = \InfobipSDK\Enums\B839d8c276f6f1ef62ce2dce758ba402953b31f455d6d08549a7147d79f50d62\RcsConversationType::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
