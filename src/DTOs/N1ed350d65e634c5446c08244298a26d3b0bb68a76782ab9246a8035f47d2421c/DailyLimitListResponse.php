<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N1ed350d65e634c5446c08244298a26d3b0bb68a76782ab9246a8035f47d2421c;

/**
 * DailyLimitListResponse
 *
 * Response containing a list of daily limits.
 * Example: {"limits":[{"countryCode":"US","messageCountLimit":1000},{"countryCode":"GB","messageCountLimit":500}]}
 */
final class DailyLimitListResponse extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'limits',
];

    /**
     * List of daily limits.
     */
    public \InfobipSDK\Collections\N1ed350d65e634c5446c08244298a26d3b0bb68a76782ab9246a8035f47d2421c\DailyLimitListResponse\LimitsCollection $limits;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'limits' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->limits = new \InfobipSDK\Collections\N1ed350d65e634c5446c08244298a26d3b0bb68a76782ab9246a8035f47d2421c\DailyLimitListResponse\LimitsCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \InfobipSDK\DTOs\N1ed350d65e634c5446c08244298a26d3b0bb68a76782ab9246a8035f47d2421c\DailyLimit::class)) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
