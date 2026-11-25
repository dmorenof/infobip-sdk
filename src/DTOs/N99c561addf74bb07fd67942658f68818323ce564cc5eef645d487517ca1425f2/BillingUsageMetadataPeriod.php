<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N99c561addf74bb07fd67942658f68818323ce564cc5eef645d487517ca1425f2;

/**
 * BillingUsageMetadataPeriod
 *
 * Metadata for each covered calendar month.
 */
final class BillingUsageMetadataPeriod extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'month',
        'volumeFinalized',
    ];

    /**
     * Calendar month in yyyy-MM format.
     * Example: "2026-03"
     */
    public string $month;
    /**
     * Indicates whether the billing data for this month has been fully processed and no further volume changes are expected.
     */
    public bool $volumeFinalized;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'month' => is_string($value) ? $this->month = $value : parent::assignMember($name, $value),
            'volumeFinalized' => is_bool($value) ? $this->volumeFinalized = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
