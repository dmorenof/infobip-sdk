<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N245a74e48cd7ce0a3e2f108689f6fc8d5a08a4d75c5aeb1883fc983443d62958;

/**
 * LiveChatOutboundQuickReplyContent
 */
final class LiveChatOutboundQuickReplyContent extends \InfobipSDK\DTOs\N245a74e48cd7ce0a3e2f108689f6fc8d5a08a4d75c5aeb1883fc983443d62958\LiveChatOutboundContent
{
    public const array REQUIRED_FIELDS = [];

    protected const string ADDITIONAL_PROPERTIES_TYPE = 'mixed';
    protected const bool ADDITIONAL_PROPERTIES_NULLABLE = false;

    /**
     * End user response.
     */
    public string $reply;
    public \InfobipSDK\DTOs\N245a74e48cd7ce0a3e2f108689f6fc8d5a08a4d75c5aeb1883fc983443d62958\LiveChatOutboundContent $source;
    /**
     * Predefined message suggestions to easily start a conversation.
     */
    public \InfobipSDK\Collections\StringCollection $suggestedReplies;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'reply' => is_string($value) ? $this->reply = $value : parent::assignMember($name, $value),
            'suggestedReplies' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->suggestedReplies = new \InfobipSDK\Collections\StringCollection($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
