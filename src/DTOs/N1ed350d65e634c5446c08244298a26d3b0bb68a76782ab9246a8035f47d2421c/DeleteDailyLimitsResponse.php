<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N1ed350d65e634c5446c08244298a26d3b0bb68a76782ab9246a8035f47d2421c;

/**
 * DeleteDailyLimitsResponse
 *
 * Response containing the country codes for which daily limits were deleted.
 * Example: {"deletedCountryCodes":["US","GB"]}
 */
final class DeleteDailyLimitsResponse extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'deletedCountryCodes',
];

    /**
     * Country codes for which daily limits were deleted.
     * Example: ["US","GB"]
     */
    public \InfobipSDK\Collections\StringCollection $deletedCountryCodes;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'deletedCountryCodes' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->deletedCountryCodes = new \InfobipSDK\Collections\StringCollection($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
