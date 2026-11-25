<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N7c77a2c703ce12a601f120565936de62cf48d1baf9232d5411f82fc339353553;

/**
 * NumberCoverageKey
 */
final class NumberCoverageKey extends \InfobipSDK\DTOs\N7c77a2c703ce12a601f120565936de62cf48d1baf9232d5411f82fc339353553\IbResourceCoverageKey
{
    public const array REQUIRED_FIELDS = [
    'resourceType',
];

    protected const array VALIDATION = [
    'countryCode' => [
        'minLength' => 1,
        'pattern' => '^[A-Z]{2}$',
    ],
    'number' => [
        'minLength' => 0,
        'maxLength' => 255,
    ],
];

    protected const string ADDITIONAL_PROPERTIES_TYPE = 'mixed';
    protected const bool ADDITIONAL_PROPERTIES_NULLABLE = false;

    /**
     * Country code in two-letter ISO standard. Required for identifying country specific resources (for instance, short code number types).
     * Example: "GB"
     */
    public string $countryCode {
        set {
            $this->assigning('countryCode', $value);
            $this->countryCode = $value;
        }
    }
    /**
     * Phone number.
     * Example: "41793026727"
     */
    public string $number {
        set {
            $this->assigning('number', $value);
            $this->number = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'countryCode' => is_string($value) ? $this->countryCode = $value : parent::assignMember($name, $value),
            'number' => is_string($value) ? $this->number = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
