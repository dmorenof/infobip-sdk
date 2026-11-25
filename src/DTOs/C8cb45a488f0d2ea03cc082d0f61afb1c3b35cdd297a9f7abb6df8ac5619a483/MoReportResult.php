<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\C8cb45a488f0d2ea03cc082d0f61afb1c3b35cdd297a9f7abb6df8ac5619a483;

/**
 * MoReportResult
 *
 * List of MO report results.
 */
final class MoReportResult extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'applicationCode',
        'cleanText',
        'from',
        'messageId',
        'receivedAt',
        'text',
        'to',
    ];

    /**
     * Application code that the message was sent to.
     */
    public string $applicationCode;
    /**
     * Unique ID assigned to the request if messaging multiple recipients or sending multiple messages via a single API request.
     */
    public string $bulkId;
    /**
     * Callback data sent through callbackData field when the message was sent.
     */
    public string $callbackData;
    /**
     * Text of the received message without the keyword.
     */
    public string $cleanText;
    /**
     * Custom payload of the received message.
     */
    public \InfobipSDK\DTOs\C8cb45a488f0d2ea03cc082d0f61afb1c3b35cdd297a9f7abb6df8ac5619a483\MoReportResult\CustomPayloadMap $customPayload;
    /**
     * The sender ID which can be alphanumeric or numeric.
     */
    public string $from;
    /**
     * The ID of the original MT message that initiated the conversation.
     */
    public string $initialMessageId;
    /**
     * Keyword extracted from the message text.
     */
    public string $keyword;
    /**
     * The ID that uniquely identifies the received message.
     */
    public string $messageId;
    /**
     * Message ID of the MT message that this MO message is a reply to.
     */
    public string $pairedMessageId;
    /**
     * Indicates when the message was received. Has the following format: `yyyy-MM-dd'T'HH:mm:ss.SSSZ`.
     * Format: date-time
     */
    public string $receivedAt;
    /**
     * Subscriber ID of the message sender.
     */
    public string $subscriberId;
    /**
     * Full text of the received message.
     */
    public string $text;
    /**
     * The message destination address.
     */
    public string $to;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'applicationCode' => is_string($value) ? $this->applicationCode = $value : parent::assignMember($name, $value),
            'bulkId' => is_string($value) ? $this->bulkId = $value : parent::assignMember($name, $value),
            'callbackData' => is_string($value) ? $this->callbackData = $value : parent::assignMember($name, $value),
            'cleanText' => is_string($value) ? $this->cleanText = $value : parent::assignMember($name, $value),
            'from' => is_string($value) ? $this->from = $value : parent::assignMember($name, $value),
            'initialMessageId' => is_string($value) ? $this->initialMessageId = $value : parent::assignMember($name, $value),
            'keyword' => is_string($value) ? $this->keyword = $value : parent::assignMember($name, $value),
            'messageId' => is_string($value) ? $this->messageId = $value : parent::assignMember($name, $value),
            'pairedMessageId' => is_string($value) ? $this->pairedMessageId = $value : parent::assignMember($name, $value),
            'receivedAt' => is_string($value) ? $this->receivedAt = $value : parent::assignMember($name, $value),
            'subscriberId' => is_string($value) ? $this->subscriberId = $value : parent::assignMember($name, $value),
            'text' => is_string($value) ? $this->text = $value : parent::assignMember($name, $value),
            'to' => is_string($value) ? $this->to = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
