<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N245a74e48cd7ce0a3e2f108689f6fc8d5a08a4d75c5aeb1883fc983443d62958;

/**
 * LiveChatOutboundButtonPayload
 *
 * Card buttons.
 */
final class LiveChatOutboundButtonPayload extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'payload',
    'title',
    'type',
];

    /**
     * Unique identifier for 'call to action' buttons.
     */
    public string $payload;
    /**
     * Button title.
     */
    public string $title;
    public \InfobipSDK\Enums\N245a74e48cd7ce0a3e2f108689f6fc8d5a08a4d75c5aeb1883fc983443d62958\LiveChatOutboundButtonPayloadType $type;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'payload' => is_string($value) ? $this->payload = $value : parent::assignMember($name, $value),
            'title' => is_string($value) ? $this->title = $value : parent::assignMember($name, $value),
            'type' => is_string($value) ? $this->type = \InfobipSDK\Enums\N245a74e48cd7ce0a3e2f108689f6fc8d5a08a4d75c5aeb1883fc983443d62958\LiveChatOutboundButtonPayloadType::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
