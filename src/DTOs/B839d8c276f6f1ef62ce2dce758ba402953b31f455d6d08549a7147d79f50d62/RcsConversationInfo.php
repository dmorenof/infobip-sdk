<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\B839d8c276f6f1ef62ce2dce758ba402953b31f455d6d08549a7147d79f50d62;

/**
 * RcsConversationInfo
 *
 * Conversation information associated with the message.
 */
final class RcsConversationInfo extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'canInitiate',
];

    /**
     * Indicates whether this message can initiate or trigger a conversation. If the message already belongs to a conversation, the value is false.
     */
    public bool $canInitiate;
    /**
     * Unique conversation identifier. Present when the message belongs to a conversation, null otherwise.
     */
    public string $id;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'canInitiate' => is_bool($value) ? $this->canInitiate = $value : parent::assignMember($name, $value),
            'id' => is_string($value) ? $this->id = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
