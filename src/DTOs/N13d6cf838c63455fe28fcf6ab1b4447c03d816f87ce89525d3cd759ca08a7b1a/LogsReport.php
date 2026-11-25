<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N13d6cf838c63455fe28fcf6ab1b4447c03d816f87ce89525d3cd759ca08a7b1a;

/**
 * LogsReport
 *
 * Array of voice message logs, one object per each message.
 */
final class LogsReport extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
    'duration' => [
        'format' => 'int32',
    ],
];

    /**
     * The ID that uniquely identifies the bulk of messages.
     */
    public string $bulkId;
    /**
     * Date and time when the Infobip services finished processing the voice message (i.e. delivered to the destination, delivered to the destination network, etc.).
     * Format: date-time
     */
    public string $doneAt;
    /**
     * Voice message duration in seconds.
     * Format: int32
     */
    public int $duration {
        set {
            $this->assigning('duration', $value);
            $this->duration = $value;
        }
    }
    public \InfobipSDK\DTOs\N13d6cf838c63455fe28fcf6ab1b4447c03d816f87ce89525d3cd759ca08a7b1a\VoiceError $error;
    /**
     * The sender ID which can be alphanumeric or numeric.
     */
    public string $from;
    /**
     * Mobile country and network codes.
     */
    public string $mccMnc;
    /**
     * The ID that uniquely identifies the message sent.
     */
    public string $messageId;
    public \InfobipSDK\DTOs\N13d6cf838c63455fe28fcf6ab1b4447c03d816f87ce89525d3cd759ca08a7b1a\Price $price;
    /**
     * Date and time when the voice message was initiated. Has the following format: yyyy-MM-dd'T'HH:mm:ss.SSSZ.
     * Format: date-time
     */
    public string $sentAt;
    public \InfobipSDK\DTOs\N13d6cf838c63455fe28fcf6ab1b4447c03d816f87ce89525d3cd759ca08a7b1a\SingleMessageStatus $status;
    /**
     * Content of the voice message that was sent.
     */
    public string $text;
    /**
     * Destination address of the voice message.
     */
    public string $to;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'bulkId' => is_string($value) ? $this->bulkId = $value : parent::assignMember($name, $value),
            'doneAt' => is_string($value) ? $this->doneAt = $value : parent::assignMember($name, $value),
            'duration' => is_int($value) ? $this->duration = $value : parent::assignMember($name, $value),
            'error' => $value instanceof \stdClass ? $this->error = new \InfobipSDK\DTOs\N13d6cf838c63455fe28fcf6ab1b4447c03d816f87ce89525d3cd759ca08a7b1a\VoiceError($value) : parent::assignMember($name, $value),
            'from' => is_string($value) ? $this->from = $value : parent::assignMember($name, $value),
            'mccMnc' => is_string($value) ? $this->mccMnc = $value : parent::assignMember($name, $value),
            'messageId' => is_string($value) ? $this->messageId = $value : parent::assignMember($name, $value),
            'price' => $value instanceof \stdClass ? $this->price = new \InfobipSDK\DTOs\N13d6cf838c63455fe28fcf6ab1b4447c03d816f87ce89525d3cd759ca08a7b1a\Price($value) : parent::assignMember($name, $value),
            'sentAt' => is_string($value) ? $this->sentAt = $value : parent::assignMember($name, $value),
            'status' => $value instanceof \stdClass ? $this->status = new \InfobipSDK\DTOs\N13d6cf838c63455fe28fcf6ab1b4447c03d816f87ce89525d3cd759ca08a7b1a\SingleMessageStatus($value) : parent::assignMember($name, $value),
            'text' => is_string($value) ? $this->text = $value : parent::assignMember($name, $value),
            'to' => is_string($value) ? $this->to = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
