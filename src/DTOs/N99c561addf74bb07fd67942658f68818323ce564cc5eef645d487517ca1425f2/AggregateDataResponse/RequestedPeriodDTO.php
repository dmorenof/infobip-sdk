<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N99c561addf74bb07fd67942658f68818323ce564cc5eef645d487517ca1425f2\AggregateDataResponse;

/**
 * The actual time period used for data filtering, expressed as a date range. May differ from the requested range because the requested range may be aligned to the aggregation granularity, and, where applicable, trimmed to finalized periods only.
 */
final class RequestedPeriodDTO extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'sentSince',
    'sentUntil',
];

    /**
     * Start of the sent traffic date-time period (inclusive).
     * Example: "2023-04-01T00:00:00Z"
     * Format: date-time
     */
    public string $sentSince;
    /**
     * End of the sent traffic date-time period (exclusive).
     * Example: "2023-04-01T00:00:00Z"
     * Format: date-time
     */
    public string $sentUntil;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'sentSince' => is_string($value) ? $this->sentSince = $value : parent::assignMember($name, $value),
            'sentUntil' => is_string($value) ? $this->sentUntil = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
