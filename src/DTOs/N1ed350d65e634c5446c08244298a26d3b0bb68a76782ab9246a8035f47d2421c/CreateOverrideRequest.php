<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N1ed350d65e634c5446c08244298a26d3b0bb68a76782ab9246a8035f47d2421c;

/**
 * CreateOverrideRequest
 *
 * Request to create country-level blocking overrides.
 * Example: {"overrides":[{"countryCode":"US","sensitivity":"STRICT"},{"countryCode":"GB","sensitivity":"LOW","enabled":false}]}
 */
final class CreateOverrideRequest extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'overrides',
];

    protected const array VALIDATION = [
    'overrides' => [
        'minItems' => 1,
        'maxItems' => 10,
    ],
];

    /**
     * List of country-level overrides to create.
     */
    public \InfobipSDK\Collections\N1ed350d65e634c5446c08244298a26d3b0bb68a76782ab9246a8035f47d2421c\CreateOverrideRequest\OverridesCollection $overrides {
        set {
            $this->assigning('overrides', $value);
            $this->overrides = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'overrides' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->overrides = new \InfobipSDK\Collections\N1ed350d65e634c5446c08244298a26d3b0bb68a76782ab9246a8035f47d2421c\CreateOverrideRequest\OverridesCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \InfobipSDK\DTOs\N1ed350d65e634c5446c08244298a26d3b0bb68a76782ab9246a8035f47d2421c\OverrideItemRequest::class)) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
