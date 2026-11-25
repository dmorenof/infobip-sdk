<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\B839d8c276f6f1ef62ce2dce758ba402953b31f455d6d08549a7147d79f50d62;

/**
 * RcsWebhookDeliveryReport
 *
 * Collection of reports, one per every message.
 */
final class RcsWebhookDeliveryReport extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
    'messageCount' => [
        'format' => 'int32',
    ],
];

    /**
     * Unique ID assigned to the request if messaging multiple recipients or sending multiple messages via a single API request.
     */
    public string $bulkId;
    /**
     * Callback data sent through ‛callbackData‛ field when sending message.
     */
    public string $callbackData;
    /**
     * ID of a campaign that was sent in the message.
     */
    public string $campaignReferenceId;
    /**
     * The channel used to deliver a message. This property will be present only if the original message was sent with the failover option defined. The property will be included in the delivery report for the original RCS message and for the failover message (in case the failover was triggered).
     */
    public \InfobipSDK\Enums\B839d8c276f6f1ef62ce2dce758ba402953b31f455d6d08549a7147d79f50d62\RcsWebhookDeliveryReport\ChannelEnum $channel;
    public \InfobipSDK\DTOs\B839d8c276f6f1ef62ce2dce758ba402953b31f455d6d08549a7147d79f50d62\RcsConversationInfo $conversation;
    /**
     * Date and time when the Infobip services finished processing the message (i.e., delivered to the destination, network, etc.). Has the following format: yyyy-MM-dd'T'HH:mm:ss.SSSZ.
     * Format: date-time
     */
    public string $doneAt;
    public \InfobipSDK\DTOs\B839d8c276f6f1ef62ce2dce758ba402953b31f455d6d08549a7147d79f50d62\MessageError $error;
    public \InfobipSDK\Enums\B839d8c276f6f1ef62ce2dce758ba402953b31f455d6d08549a7147d79f50d62\RcsMessageInteractionType $interactionType;
    /**
     * Mobile country and network codes.
     */
    public string $mccMnc;
    public \InfobipSDK\DTOs\B839d8c276f6f1ef62ce2dce758ba402953b31f455d6d08549a7147d79f50d62\RcsMediaSizeInfo $media;
    /**
     * The number of sent messages.
     * Format: int32
     */
    public int $messageCount {
        set {
            $this->assigning('messageCount', $value);
            $this->messageCount = $value;
        }
    }
    /**
     * Unique message ID.
     */
    public string $messageId;
    public \InfobipSDK\DTOs\B839d8c276f6f1ef62ce2dce758ba402953b31f455d6d08549a7147d79f50d62\Platform $platform;
    public \InfobipSDK\DTOs\B839d8c276f6f1ef62ce2dce758ba402953b31f455d6d08549a7147d79f50d62\RcsDlrMessagePrice $price;
    /**
     * The sender ID which can be alphanumeric or numeric (e.g., `CompanyName`).
     */
    public string $sender;
    /**
     * Date and time when the message was sent. Has the following format: yyyy-MM-dd'T'HH:mm:ss.SSSZ.
     * Format: date-time
     */
    public string $sentAt;
    public \InfobipSDK\DTOs\B839d8c276f6f1ef62ce2dce758ba402953b31f455d6d08549a7147d79f50d62\MessageStatus $status;
    /**
     * Message destination address.
     */
    public string $to;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'bulkId' => is_string($value) ? $this->bulkId = $value : parent::assignMember($name, $value),
            'callbackData' => is_string($value) ? $this->callbackData = $value : parent::assignMember($name, $value),
            'campaignReferenceId' => is_string($value) ? $this->campaignReferenceId = $value : parent::assignMember($name, $value),
            'channel' => is_string($value) ? $this->channel = \InfobipSDK\Enums\B839d8c276f6f1ef62ce2dce758ba402953b31f455d6d08549a7147d79f50d62\RcsWebhookDeliveryReport\ChannelEnum::from($value) : parent::assignMember($name, $value),
            'conversation' => $value instanceof \stdClass ? $this->conversation = new \InfobipSDK\DTOs\B839d8c276f6f1ef62ce2dce758ba402953b31f455d6d08549a7147d79f50d62\RcsConversationInfo($value) : parent::assignMember($name, $value),
            'doneAt' => is_string($value) ? $this->doneAt = $value : parent::assignMember($name, $value),
            'error' => $value instanceof \stdClass ? $this->error = new \InfobipSDK\DTOs\B839d8c276f6f1ef62ce2dce758ba402953b31f455d6d08549a7147d79f50d62\MessageError($value) : parent::assignMember($name, $value),
            'interactionType' => is_string($value) ? $this->interactionType = \InfobipSDK\Enums\B839d8c276f6f1ef62ce2dce758ba402953b31f455d6d08549a7147d79f50d62\RcsMessageInteractionType::from($value) : parent::assignMember($name, $value),
            'mccMnc' => is_string($value) ? $this->mccMnc = $value : parent::assignMember($name, $value),
            'media' => $value instanceof \stdClass ? $this->media = new \InfobipSDK\DTOs\B839d8c276f6f1ef62ce2dce758ba402953b31f455d6d08549a7147d79f50d62\RcsMediaSizeInfo($value) : parent::assignMember($name, $value),
            'messageCount' => is_int($value) ? $this->messageCount = $value : parent::assignMember($name, $value),
            'messageId' => is_string($value) ? $this->messageId = $value : parent::assignMember($name, $value),
            'platform' => $value instanceof \stdClass ? $this->platform = new \InfobipSDK\DTOs\B839d8c276f6f1ef62ce2dce758ba402953b31f455d6d08549a7147d79f50d62\Platform($value) : parent::assignMember($name, $value),
            'price' => $value instanceof \stdClass ? $this->price = new \InfobipSDK\DTOs\B839d8c276f6f1ef62ce2dce758ba402953b31f455d6d08549a7147d79f50d62\RcsDlrMessagePrice($value) : parent::assignMember($name, $value),
            'sender' => is_string($value) ? $this->sender = $value : parent::assignMember($name, $value),
            'sentAt' => is_string($value) ? $this->sentAt = $value : parent::assignMember($name, $value),
            'status' => $value instanceof \stdClass ? $this->status = new \InfobipSDK\DTOs\B839d8c276f6f1ef62ce2dce758ba402953b31f455d6d08549a7147d79f50d62\MessageStatus($value) : parent::assignMember($name, $value),
            'to' => is_string($value) ? $this->to = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
