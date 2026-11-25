<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N46339420b556d1893a150250c0e3220eb8057cd2fc4110e601753f705fc1f8c4;

/**
 * SimpleReport
 */
final class SimpleReport extends \Dmorenof\SdkRuntime\DTO
{
    protected const array WRITE_ONLY_FIELDS = [
    'callbackData',
    'from',
    'integrationType',
    'messageId',
    'pairedMessageId',
    'price',
    'receivedAt',
    'to',
];

    protected const string ADDITIONAL_PROPERTIES_TYPE = 'mixed';
    protected const bool ADDITIONAL_PROPERTIES_NULLABLE = false;

    public string $callbackData;
    /**
     * Number which sent the message.
     */
    public string $from;
    /**
     * Integration type.
     */
    public \InfobipSDK\Enums\N46339420b556d1893a150250c0e3220eb8057cd2fc4110e601753f705fc1f8c4\SimpleReport\IntegrationTypeEnum $integrationType;
    public \InfobipSDK\DTOs\N46339420b556d1893a150250c0e3220eb8057cd2fc4110e601753f705fc1f8c4\SimpleReport\MessageDTO $message;
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
            'integrationType' => is_string($value) ? $this->integrationType = \InfobipSDK\Enums\N46339420b556d1893a150250c0e3220eb8057cd2fc4110e601753f705fc1f8c4\SimpleReport\IntegrationTypeEnum::from($value) : parent::assignMember($name, $value),
            'messageId' => is_string($value) ? $this->messageId = $value : parent::assignMember($name, $value),
            'pairedMessageId' => is_string($value) ? $this->pairedMessageId = $value : parent::assignMember($name, $value),
            'price' => $value instanceof \stdClass ? $this->price = new \InfobipSDK\DTOs\N3307df001c42dd833d79f33c79b6946b4d01c30ce33030254141df9a2298b3c8\Price($value) : parent::assignMember($name, $value),
            'receivedAt' => is_string($value) ? $this->receivedAt = $value : parent::assignMember($name, $value),
            'to' => is_string($value) ? $this->to = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
