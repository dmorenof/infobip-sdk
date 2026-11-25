<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N1ed350d65e634c5446c08244298a26d3b0bb68a76782ab9246a8035f47d2421c;

/**
 * CreateDailyLimitsRequest
 *
 * Request to create daily limits.
 * Example: {"limits":[{"countryCode":"US","messageCountLimit":1000},{"countryCode":"GB","messageCountLimit":500}]}
 */
final class CreateDailyLimitsRequest extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'limits',
];

    protected const array VALIDATION = [
    'limits' => [
        'minItems' => 1,
        'maxItems' => 10,
    ],
];

    /**
     * List of country daily limits to create.
     */
    public \InfobipSDK\Collections\N1ed350d65e634c5446c08244298a26d3b0bb68a76782ab9246a8035f47d2421c\CreateDailyLimitsRequest\LimitsCollection $limits {
        set {
            $this->assigning('limits', $value);
            $this->limits = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'limits' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->limits = new \InfobipSDK\Collections\N1ed350d65e634c5446c08244298a26d3b0bb68a76782ab9246a8035f47d2421c\CreateDailyLimitsRequest\LimitsCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \InfobipSDK\DTOs\N1ed350d65e634c5446c08244298a26d3b0bb68a76782ab9246a8035f47d2421c\CountryLimitRequest::class)) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
