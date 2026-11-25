<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N99c561addf74bb07fd67942658f68818323ce564cc5eef645d487517ca1425f2;

/**
 * BillingUsageMetadata
 *
 * Additional billing data metadata included in the response.
 */
final class BillingUsageMetadata extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'billingPeriods',
        'clientRequestedPeriod',
    ];

    /**
     * Metadata for each covered calendar month.
     */
    public \InfobipSDK\Collections\N99c561addf74bb07fd67942658f68818323ce564cc5eef645d487517ca1425f2\BillingUsageMetadata\BillingPeriodsCollection $billingPeriods;
    /**
     * Originally requested time period referenced in the response.
     */
    public \InfobipSDK\DTOs\N99c561addf74bb07fd67942658f68818323ce564cc5eef645d487517ca1425f2\BillingUsageMetadata\RequestedPeriodDTO $clientRequestedPeriod;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'billingPeriods' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->billingPeriods = new \InfobipSDK\Collections\N99c561addf74bb07fd67942658f68818323ce564cc5eef645d487517ca1425f2\BillingUsageMetadata\BillingPeriodsCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \InfobipSDK\DTOs\N99c561addf74bb07fd67942658f68818323ce564cc5eef645d487517ca1425f2\BillingUsageMetadataPeriod::class)) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
