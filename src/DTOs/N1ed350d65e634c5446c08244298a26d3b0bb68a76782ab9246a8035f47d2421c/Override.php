<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N1ed350d65e634c5446c08244298a26d3b0bb68a76782ab9246a8035f47d2421c;

/**
 * Override
 *
 * A country-level blocking override.
 */
final class Override extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'countryCode',
        'enabled',
        'sensitivity',
    ];

    /**
     * ISO alpha-2 country code to which this override applies.
     * Example: "US"
     */
    public string $countryCode;
    /**
     * Indicates whether this override is currently active.
     */
    public bool $enabled;
    /**
     * Blocking sensitivity applied for this country. Sensitivity controls how much suspicious traffic is blocked, from VERY_STRICT (the most) to CONSERVATIVE (only high-confidence fraud).
     */
    public \InfobipSDK\Enums\N1ed350d65e634c5446c08244298a26d3b0bb68a76782ab9246a8035f47d2421c\Override\SensitivityEnum $sensitivity;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'countryCode' => is_string($value) ? $this->countryCode = $value : parent::assignMember($name, $value),
            'enabled' => is_bool($value) ? $this->enabled = $value : parent::assignMember($name, $value),
            'sensitivity' => is_string($value) ? $this->sensitivity = \InfobipSDK\Enums\N1ed350d65e634c5446c08244298a26d3b0bb68a76782ab9246a8035f47d2421c\Override\SensitivityEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
