<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\B839d8c276f6f1ef62ce2dce758ba402953b31f455d6d08549a7147d79f50d62;

/**
 * RcsInboundMessage
 *
 * Collection of mobile originated messages.
 */
final class RcsInboundMessage extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'conversation',
    'integrationType',
    'interactionType',
    'message',
    'messageId',
    'platform',
    'price',
    'rcsCount',
    'receivedAt',
    'sender',
    'to',
];

    protected const array VALIDATION = [
    'rcsCount' => [
        'format' => 'int32',
    ],
];

    /**
     * Callback data sent through ‛callbackData‛ field when sending message.
     */
    public string $callbackData;
    /**
     * ID that allows you to track, analyze, and show an aggregated overview and the performance of individual campaigns per sending channel.
     */
    public string $campaignReferenceId;
    public \InfobipSDK\DTOs\B839d8c276f6f1ef62ce2dce758ba402953b31f455d6d08549a7147d79f50d62\RcsConversationInfo $conversation;
    /**
     * Integration type.
     */
    public string $integrationType;
    public \InfobipSDK\Enums\B839d8c276f6f1ef62ce2dce758ba402953b31f455d6d08549a7147d79f50d62\RcsMessageInteractionType $interactionType;
    /**
     * Keyword extracted from the message text.
     */
    public string $keyword;
    public \InfobipSDK\DTOs\B839d8c276f6f1ef62ce2dce758ba402953b31f455d6d08549a7147d79f50d62\RcsInboundMessageContent $message;
    /**
     * The ID that uniquely identifies the received message.
     */
    public string $messageId;
    /**
     * Message ID of paired outgoing message if matched by Infobip platform.
     */
    public string $pairedMessageId;
    public \InfobipSDK\DTOs\B839d8c276f6f1ef62ce2dce758ba402953b31f455d6d08549a7147d79f50d62\RcsPlatformInfo $platform;
    public \InfobipSDK\DTOs\B839d8c276f6f1ef62ce2dce758ba402953b31f455d6d08549a7147d79f50d62\RcsMoMessagePrice $price;
    /**
     * A field that informs the client how many segment counts does a MO message contain. Can be received as > 1 for use case of Rich message in USA.
     * Format: int32
     */
    public int $rcsCount {
        set {
            $this->assigning('rcsCount', $value);
            $this->rcsCount = $value;
        }
    }
    /**
     * Date and time when Infobip received the message. Has the following format: yyyy-MM-dd'T'HH:mm:ss.SSSZ.
     * Format: date-time
     */
    public string $receivedAt;
    /**
     * Number which sent the message.
     */
    public string $sender;
    /**
     * Sender provided during the activation process.
     */
    public string $to;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'callbackData' => is_string($value) ? $this->callbackData = $value : parent::assignMember($name, $value),
            'campaignReferenceId' => is_string($value) ? $this->campaignReferenceId = $value : parent::assignMember($name, $value),
            'conversation' => $value instanceof \stdClass ? $this->conversation = new \InfobipSDK\DTOs\B839d8c276f6f1ef62ce2dce758ba402953b31f455d6d08549a7147d79f50d62\RcsConversationInfo($value) : parent::assignMember($name, $value),
            'integrationType' => is_string($value) ? $this->integrationType = $value : parent::assignMember($name, $value),
            'interactionType' => is_string($value) ? $this->interactionType = \InfobipSDK\Enums\B839d8c276f6f1ef62ce2dce758ba402953b31f455d6d08549a7147d79f50d62\RcsMessageInteractionType::from($value) : parent::assignMember($name, $value),
            'keyword' => is_string($value) ? $this->keyword = $value : parent::assignMember($name, $value),
            'message' => $value instanceof \stdClass ? $this->message = new \InfobipSDK\DTOs\B839d8c276f6f1ef62ce2dce758ba402953b31f455d6d08549a7147d79f50d62\RcsInboundMessageContent($value) : parent::assignMember($name, $value),
            'messageId' => is_string($value) ? $this->messageId = $value : parent::assignMember($name, $value),
            'pairedMessageId' => is_string($value) ? $this->pairedMessageId = $value : parent::assignMember($name, $value),
            'platform' => $value instanceof \stdClass ? $this->platform = new \InfobipSDK\DTOs\B839d8c276f6f1ef62ce2dce758ba402953b31f455d6d08549a7147d79f50d62\RcsPlatformInfo($value) : parent::assignMember($name, $value),
            'price' => $value instanceof \stdClass ? $this->price = new \InfobipSDK\DTOs\B839d8c276f6f1ef62ce2dce758ba402953b31f455d6d08549a7147d79f50d62\RcsMoMessagePrice($value) : parent::assignMember($name, $value),
            'rcsCount' => is_int($value) ? $this->rcsCount = $value : parent::assignMember($name, $value),
            'receivedAt' => is_string($value) ? $this->receivedAt = $value : parent::assignMember($name, $value),
            'sender' => is_string($value) ? $this->sender = $value : parent::assignMember($name, $value),
            'to' => is_string($value) ? $this->to = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
