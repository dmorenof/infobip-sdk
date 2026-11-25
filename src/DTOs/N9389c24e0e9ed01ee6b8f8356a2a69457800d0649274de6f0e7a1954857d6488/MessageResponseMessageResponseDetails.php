<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N9389c24e0e9ed01ee6b8f8356a2a69457800d0649274de6f0e7a1954857d6488;

/**
 * MessageResponseMessageResponseDetails
 *
 * An array of message objects of a single message or multiple messages sent under one bulk ID.
 */
final class MessageResponseMessageResponseDetails extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * The destination address of the message, i.e., its recipient.
     */
    public string $destination;
    public \InfobipSDK\DTOs\N9389c24e0e9ed01ee6b8f8356a2a69457800d0649274de6f0e7a1954857d6488\MessageResponseDetails $details;
    /**
     * Unique message ID. If not provided, it will be auto-generated and returned in the API response.
     */
    public string $messageId;
    public \InfobipSDK\DTOs\N9389c24e0e9ed01ee6b8f8356a2a69457800d0649274de6f0e7a1954857d6488\MessageStatus $status;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'destination' => is_string($value) ? $this->destination = $value : parent::assignMember($name, $value),
            'messageId' => is_string($value) ? $this->messageId = $value : parent::assignMember($name, $value),
            'status' => $value instanceof \stdClass ? $this->status = new \InfobipSDK\DTOs\N9389c24e0e9ed01ee6b8f8356a2a69457800d0649274de6f0e7a1954857d6488\MessageStatus($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
