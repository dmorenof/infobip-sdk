<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N245a74e48cd7ce0a3e2f108689f6fc8d5a08a4d75c5aeb1883fc983443d62958;

/**
 * LivechatInboundMessage
 *
 * Incoming messages.
 */
final class LivechatInboundMessage extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'from',
    'integrationType',
    'message',
    'messageId',
    'price',
    'receivedAt',
    'to',
];

    /**
     * Callback data sent through the ‛callbackData‛ field when sending a message.
     */
    public string $callbackData;
    /**
     * Widget language at the time the message was sent.
     */
    public string $currentLanguage;
    /**
     * Live Chat registration ID of the person who sent the message.
     */
    public string $from;
    /**
     * Message channel which was used to send the message. It is always LIVE_CHAT in this case.
     */
    public string $integrationType;
    public \InfobipSDK\DTOs\N245a74e48cd7ce0a3e2f108689f6fc8d5a08a4d75c5aeb1883fc983443d62958\LiveChatInboundContent $message;
    /**
     * The ID that uniquely identifies the received message.
     */
    public string $messageId;
    public \InfobipSDK\DTOs\N245a74e48cd7ce0a3e2f108689f6fc8d5a08a4d75c5aeb1883fc983443d62958\MessagePrice $price;
    /**
     * Date and time when Infobip received the message.
     * Format: date-time
     */
    public string $receivedAt;
    /**
     * The ID that uniquely identifies the conversation thread.
     */
    public string $threadId;
    /**
     * Live Chat widget ID which was used to send the message.
     */
    public string $to;
    public \InfobipSDK\DTOs\N245a74e48cd7ce0a3e2f108689f6fc8d5a08a4d75c5aeb1883fc983443d62958\LiveChatInboundUserData $userData;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'callbackData' => is_string($value) ? $this->callbackData = $value : parent::assignMember($name, $value),
            'currentLanguage' => is_string($value) ? $this->currentLanguage = $value : parent::assignMember($name, $value),
            'from' => is_string($value) ? $this->from = $value : parent::assignMember($name, $value),
            'integrationType' => is_string($value) ? $this->integrationType = $value : parent::assignMember($name, $value),
            'messageId' => is_string($value) ? $this->messageId = $value : parent::assignMember($name, $value),
            'price' => $value instanceof \stdClass ? $this->price = new \InfobipSDK\DTOs\N245a74e48cd7ce0a3e2f108689f6fc8d5a08a4d75c5aeb1883fc983443d62958\MessagePrice($value) : parent::assignMember($name, $value),
            'receivedAt' => is_string($value) ? $this->receivedAt = $value : parent::assignMember($name, $value),
            'threadId' => is_string($value) ? $this->threadId = $value : parent::assignMember($name, $value),
            'to' => is_string($value) ? $this->to = $value : parent::assignMember($name, $value),
            'userData' => $value instanceof \stdClass ? $this->userData = new \InfobipSDK\DTOs\N245a74e48cd7ce0a3e2f108689f6fc8d5a08a4d75c5aeb1883fc983443d62958\LiveChatInboundUserData($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
