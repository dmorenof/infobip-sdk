<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N287f18f04e9f129a7bc94ed3ae48e2480e2673b8fdf041ab5125fde9674634b8;

/**
 * ResponseDetails
 *
 * Array of sent messages, one object per every message.
 */
final class ResponseDetails extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * The ID that uniquely identifies the message sent.
     */
    public string $messageId;
    public \InfobipSDK\DTOs\N287f18f04e9f129a7bc94ed3ae48e2480e2673b8fdf041ab5125fde9674634b8\SingleMessageStatus $status;
    /**
     * The message destination address.
     */
    public string $to;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'messageId' => is_string($value) ? $this->messageId = $value : parent::assignMember($name, $value),
            'status' => $value instanceof \stdClass ? $this->status = new \InfobipSDK\DTOs\N287f18f04e9f129a7bc94ed3ae48e2480e2673b8fdf041ab5125fde9674634b8\SingleMessageStatus($value) : parent::assignMember($name, $value),
            'to' => is_string($value) ? $this->to = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
