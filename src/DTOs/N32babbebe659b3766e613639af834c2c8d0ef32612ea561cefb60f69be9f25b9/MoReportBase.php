<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N32babbebe659b3766e613639af834c2c8d0ef32612ea561cefb60f69be9f25b9;

/**
 * MoReportBase
 */
final class MoReportBase extends \Dmorenof\SdkRuntime\DTO
{
    protected const array WRITE_ONLY_FIELDS = [
    'callbackData',
    'from',
    'messageId',
    'pairedMessageId',
    'price',
    'receivedAt',
    'to',
];

    public string $callbackData;
    /**
     * Number which sent the message.
     */
    public string $from;
    /**
     * The ID that uniquely identifies the received message.
     */
    public string $messageId;
    public string $pairedMessageId;
    /**
     * Message price.
     */
    public \InfobipSDK\DTOs\N3307df001c42dd833d79f33c79b6946b4d01c30ce33030254141df9a2298b3c8\Price $price;
    /**
     * Date and time when Infobip received the message.
     * Format: date-time
     */
    public string $receivedAt;
    /**
     * Sender provided during the activation process.
     */
    public string $to;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'callbackData' => is_string($value) ? $this->callbackData = $value : parent::assignMember($name, $value),
            'from' => is_string($value) ? $this->from = $value : parent::assignMember($name, $value),
            'messageId' => is_string($value) ? $this->messageId = $value : parent::assignMember($name, $value),
            'pairedMessageId' => is_string($value) ? $this->pairedMessageId = $value : parent::assignMember($name, $value),
            'price' => $value instanceof \stdClass ? $this->price = new \InfobipSDK\DTOs\N3307df001c42dd833d79f33c79b6946b4d01c30ce33030254141df9a2298b3c8\Price($value) : parent::assignMember($name, $value),
            'receivedAt' => is_string($value) ? $this->receivedAt = $value : parent::assignMember($name, $value),
            'to' => is_string($value) ? $this->to = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
