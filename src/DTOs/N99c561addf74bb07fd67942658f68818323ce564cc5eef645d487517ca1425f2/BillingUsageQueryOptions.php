<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N99c561addf74bb07fd67942658f68818323ce564cc5eef645d487517ca1425f2;

/**
 * BillingUsageQueryOptions
 *
 * Settings controlling data completeness, including whether unfinalized billing data is included.
 */
final class BillingUsageQueryOptions extends \Dmorenof\SdkRuntime\DTO
{
    /**
     *
     * Controls whether to include billing data where volumes have not yet been finalized. Set to `true` to include the
     * latest unfinalized data, or `false` to return only finalized billing data.
     *
     */
    public bool $includeUnfinalizedData;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'includeUnfinalizedData' => is_bool($value) ? $this->includeUnfinalizedData = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
