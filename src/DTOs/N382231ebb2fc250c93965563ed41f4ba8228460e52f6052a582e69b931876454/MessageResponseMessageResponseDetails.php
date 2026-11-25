<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N382231ebb2fc250c93965563ed41f4ba8228460e52f6052a582e69b931876454;

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
    public \InfobipSDK\DTOs\N382231ebb2fc250c93965563ed41f4ba8228460e52f6052a582e69b931876454\MessageResponseDetails $details;
    /**
     * Unique message ID. If not provided, it will be auto-generated and returned in the API response.
     */
    public string $messageId;
    public \InfobipSDK\DTOs\N382231ebb2fc250c93965563ed41f4ba8228460e52f6052a582e69b931876454\MessageStatus $status;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'destination' => is_string($value) ? $this->destination = $value : parent::assignMember($name, $value),
            'messageId' => is_string($value) ? $this->messageId = $value : parent::assignMember($name, $value),
            'status' => $value instanceof \stdClass ? $this->status = new \InfobipSDK\DTOs\N382231ebb2fc250c93965563ed41f4ba8228460e52f6052a582e69b931876454\MessageStatus($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
