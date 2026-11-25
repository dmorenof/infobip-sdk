<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\B839d8c276f6f1ef62ce2dce758ba402953b31f455d6d08549a7147d79f50d62;

/**
 * RcsConversationStartedEvent
 *
 * Collection of conversation started events.
 */
final class RcsConversationStartedEvent extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'conversation',
    'direction',
    'event',
    'messageId',
    'platform',
    'sender',
    'to',
];

    public \InfobipSDK\DTOs\B839d8c276f6f1ef62ce2dce758ba402953b31f455d6d08549a7147d79f50d62\RcsConversationStartedInfo $conversation;
    public \InfobipSDK\Enums\B839d8c276f6f1ef62ce2dce758ba402953b31f455d6d08549a7147d79f50d62\RcsConversationDirection $direction;
    public \InfobipSDK\DTOs\B839d8c276f6f1ef62ce2dce758ba402953b31f455d6d08549a7147d79f50d62\RcsConversationStartedEventContent $event;
    /**
     * The ID that uniquely identifies the sent/received message.
     */
    public string $messageId;
    public \InfobipSDK\DTOs\B839d8c276f6f1ef62ce2dce758ba402953b31f455d6d08549a7147d79f50d62\Platform $platform;
    /**
     * RCS Sender for Outbound messages or MSISDN for Inbound messages.
     */
    public string $sender;
    /**
     * MSISDN for Outbound messages or RCS Sender for Inbound messages.
     */
    public string $to;
    public \InfobipSDK\Enums\B839d8c276f6f1ef62ce2dce758ba402953b31f455d6d08549a7147d79f50d62\RcsConvStartedTrafficType $trafficType;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'conversation' => $value instanceof \stdClass ? $this->conversation = new \InfobipSDK\DTOs\B839d8c276f6f1ef62ce2dce758ba402953b31f455d6d08549a7147d79f50d62\RcsConversationStartedInfo($value) : parent::assignMember($name, $value),
            'direction' => is_string($value) ? $this->direction = \InfobipSDK\Enums\B839d8c276f6f1ef62ce2dce758ba402953b31f455d6d08549a7147d79f50d62\RcsConversationDirection::from($value) : parent::assignMember($name, $value),
            'event' => $value instanceof \stdClass ? $this->event = new \InfobipSDK\DTOs\B839d8c276f6f1ef62ce2dce758ba402953b31f455d6d08549a7147d79f50d62\RcsConversationStartedEventContent($value) : parent::assignMember($name, $value),
            'messageId' => is_string($value) ? $this->messageId = $value : parent::assignMember($name, $value),
            'platform' => $value instanceof \stdClass ? $this->platform = new \InfobipSDK\DTOs\B839d8c276f6f1ef62ce2dce758ba402953b31f455d6d08549a7147d79f50d62\Platform($value) : parent::assignMember($name, $value),
            'sender' => is_string($value) ? $this->sender = $value : parent::assignMember($name, $value),
            'to' => is_string($value) ? $this->to = $value : parent::assignMember($name, $value),
            'trafficType' => is_string($value) ? $this->trafficType = \InfobipSDK\Enums\B839d8c276f6f1ef62ce2dce758ba402953b31f455d6d08549a7147d79f50d62\RcsConvStartedTrafficType::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
