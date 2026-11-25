<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N99c561addf74bb07fd67942658f68818323ce564cc5eef645d487517ca1425f2;

/**
 * DateInterval
 *
 * Time period for billing data in UTC. sentSince is inclusive and sentUntil is exclusive.
 */
final class DateInterval extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'sentSince',
        'sentUntil',
    ];

    /**
     *
     * Start of period (inclusive). Uses UTC timezone.
     *
     * Format: `yyyy-MM-dd`.
     *
     * Example: "2026-03-01"
     * Format: date
     */
    public string $sentSince;
    /**
     *
     * End of period (exclusive). Uses UTC timezone.
     *
     * Format: `yyyy-MM-dd`.
     *
     * Example: "2026-04-01"
     * Format: date
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
