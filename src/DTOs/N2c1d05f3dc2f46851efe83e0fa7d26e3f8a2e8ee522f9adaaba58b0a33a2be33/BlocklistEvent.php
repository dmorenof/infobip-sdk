<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N2c1d05f3dc2f46851efe83e0fa7d26e3f8a2e8ee522f9adaaba58b0a33a2be33;

/**
 * BlocklistEvent
 *
 * Blocklist event.
 */
final class BlocklistEvent extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'content',
    'event',
    'messageId',
    'receivedAt',
];

    public \InfobipSDK\DTOs\N2c1d05f3dc2f46851efe83e0fa7d26e3f8a2e8ee522f9adaaba58b0a33a2be33\Content $content;
    public \InfobipSDK\Enums\N2c1d05f3dc2f46851efe83e0fa7d26e3f8a2e8ee522f9adaaba58b0a33a2be33\BlocklistEventType $event;
    /**
     * The ID that uniquely identifies the event sent.
     */
    public string $messageId;
    /**
     * Date and time when the event was received.
     * Format: date-time
     */
    public string $receivedAt;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'content' => $value instanceof \stdClass ? $this->content = new \InfobipSDK\DTOs\N2c1d05f3dc2f46851efe83e0fa7d26e3f8a2e8ee522f9adaaba58b0a33a2be33\Content($value) : parent::assignMember($name, $value),
            'event' => is_string($value) ? $this->event = \InfobipSDK\Enums\N2c1d05f3dc2f46851efe83e0fa7d26e3f8a2e8ee522f9adaaba58b0a33a2be33\BlocklistEventType::from($value) : parent::assignMember($name, $value),
            'messageId' => is_string($value) ? $this->messageId = $value : parent::assignMember($name, $value),
            'receivedAt' => is_string($value) ? $this->receivedAt = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
