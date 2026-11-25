<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N13d6cf838c63455fe28fcf6ab1b4447c03d816f87ce89525d3cd759ca08a7b1a;

/**
 * Report
 *
 * Arrays of delivery reports, one object for every message.
 */
final class Report extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * The ID that uniquely identifies the bulk of messages.
     */
    public string $bulkId;
    /**
     * Custom data sent over to the notifyUrl.
     */
    public string $callbackData;
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
     * Date and time when the voice message was initiated. Has the following format: `yyyy-MM-dd'T'HH:mm:ss.SSSZ`.
     */
    public string $sentAt;
    public \InfobipSDK\DTOs\N13d6cf838c63455fe28fcf6ab1b4447c03d816f87ce89525d3cd759ca08a7b1a\SingleMessageStatus $status;
    /**
     * Destination address of the voice message.
     */
    public string $to;
    public \InfobipSDK\DTOs\N13d6cf838c63455fe28fcf6ab1b4447c03d816f87ce89525d3cd759ca08a7b1a\VoiceData $voiceCall;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'bulkId' => is_string($value) ? $this->bulkId = $value : parent::assignMember($name, $value),
            'callbackData' => is_string($value) ? $this->callbackData = $value : parent::assignMember($name, $value),
            'error' => $value instanceof \stdClass ? $this->error = new \InfobipSDK\DTOs\N13d6cf838c63455fe28fcf6ab1b4447c03d816f87ce89525d3cd759ca08a7b1a\VoiceError($value) : parent::assignMember($name, $value),
            'from' => is_string($value) ? $this->from = $value : parent::assignMember($name, $value),
            'mccMnc' => is_string($value) ? $this->mccMnc = $value : parent::assignMember($name, $value),
            'messageId' => is_string($value) ? $this->messageId = $value : parent::assignMember($name, $value),
            'price' => $value instanceof \stdClass ? $this->price = new \InfobipSDK\DTOs\N13d6cf838c63455fe28fcf6ab1b4447c03d816f87ce89525d3cd759ca08a7b1a\Price($value) : parent::assignMember($name, $value),
            'sentAt' => is_string($value) ? $this->sentAt = $value : parent::assignMember($name, $value),
            'status' => $value instanceof \stdClass ? $this->status = new \InfobipSDK\DTOs\N13d6cf838c63455fe28fcf6ab1b4447c03d816f87ce89525d3cd759ca08a7b1a\SingleMessageStatus($value) : parent::assignMember($name, $value),
            'to' => is_string($value) ? $this->to = $value : parent::assignMember($name, $value),
            'voiceCall' => $value instanceof \stdClass ? $this->voiceCall = new \InfobipSDK\DTOs\N13d6cf838c63455fe28fcf6ab1b4447c03d816f87ce89525d3cd759ca08a7b1a\VoiceData($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
