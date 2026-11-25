<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N53932f53b54839fd583eae39fe878805e79c364296f164379eb97a5f2c4b6c59;

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
    public \InfobipSDK\DTOs\N53932f53b54839fd583eae39fe878805e79c364296f164379eb97a5f2c4b6c59\MessageResponseDetails $details;
    /**
     * Unique message ID. If not provided, it will be auto-generated and returned in the API response.
     */
    public string $messageId;
    public \InfobipSDK\DTOs\N53932f53b54839fd583eae39fe878805e79c364296f164379eb97a5f2c4b6c59\MessageStatus $status;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'destination' => is_string($value) ? $this->destination = $value : parent::assignMember($name, $value),
            'messageId' => is_string($value) ? $this->messageId = $value : parent::assignMember($name, $value),
            'status' => $value instanceof \stdClass ? $this->status = new \InfobipSDK\DTOs\N53932f53b54839fd583eae39fe878805e79c364296f164379eb97a5f2c4b6c59\MessageStatus($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
