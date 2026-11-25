<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\Ff7f7515e81995b140ab1c879b88d9d297a14922c035a187e237cd81e7c216a0;

/**
 * Payload
 */
final class Payload extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'createdAt',
    'eventDetails',
    'eventId',
];

    /**
     * Epoch milliseconds when the event occurred.
     * Format: int64
     */
    public int $createdAt;
    public \InfobipSDK\DTOs\Ff7f7515e81995b140ab1c879b88d9d297a14922c035a187e237cd81e7c216a0\EventDetails $eventDetails;
    /**
     * Unique ID of the event. This ID can be used for deduplication purposes.
     * Format: uuid
     */
    public string $eventId;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'createdAt' => is_int($value) ? $this->createdAt = $value : parent::assignMember($name, $value),
            'eventId' => is_string($value) ? $this->eventId = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
