<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N245a74e48cd7ce0a3e2f108689f6fc8d5a08a4d75c5aeb1883fc983443d62958;

/**
 * LiveChatOutboundTimestampedContent
 *
 * Welcome messages displayed to the end user.
 */
final class LiveChatOutboundTimestampedContent extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'content',
        'momentMillis',
    ];

    public \InfobipSDK\DTOs\N245a74e48cd7ce0a3e2f108689f6fc8d5a08a4d75c5aeb1883fc983443d62958\LiveChatOutboundContent $content;
    /**
     * The time of the first message received from the end user. Millisecond instant, measured from the Java epoch of 1970-01-01T00:00Z (UTC).
     * Format: int64
     */
    public int $momentMillis;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'momentMillis' => is_int($value) ? $this->momentMillis = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
