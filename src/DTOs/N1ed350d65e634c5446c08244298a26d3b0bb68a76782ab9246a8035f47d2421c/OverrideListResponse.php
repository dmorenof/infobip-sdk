<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N1ed350d65e634c5446c08244298a26d3b0bb68a76782ab9246a8035f47d2421c;

/**
 * OverrideListResponse
 *
 * Response containing a list of country-level blocking overrides.
 */
final class OverrideListResponse extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'overrides',
    ];

    /**
     * List of country-level blocking overrides.
     */
    public \InfobipSDK\Collections\N1ed350d65e634c5446c08244298a26d3b0bb68a76782ab9246a8035f47d2421c\OverrideListResponse\OverridesCollection $overrides;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'overrides' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->overrides = new \InfobipSDK\Collections\N1ed350d65e634c5446c08244298a26d3b0bb68a76782ab9246a8035f47d2421c\OverrideListResponse\OverridesCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \InfobipSDK\DTOs\N1ed350d65e634c5446c08244298a26d3b0bb68a76782ab9246a8035f47d2421c\Override::class)) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
