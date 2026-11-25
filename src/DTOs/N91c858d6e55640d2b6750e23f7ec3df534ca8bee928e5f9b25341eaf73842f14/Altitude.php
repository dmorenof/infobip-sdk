<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N91c858d6e55640d2b6750e23f7ec3df534ca8bee928e5f9b25341eaf73842f14;

/**
 * Altitude
 *
 * Altitude of the location.
 */
final class Altitude extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'uncertainty',
        'unit',
        'value',
    ];

    protected const array VALIDATION = [
        'unit' => [
            'minLength' => 1,
        ],
    ];

    /**
     * Uncertainty around altitude value.
     * Format: double
     */
    public float $uncertainty;
    /**
     * Unit of altitude values.
     */
    public string $unit {
        set {
            $this->assigning('unit', $value);
            $this->unit = $value;
        }
    }
    /**
     * Value of altitude.
     * Format: double
     */
    public float $value;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'uncertainty' => is_float($value) ? $this->uncertainty = $value : parent::assignMember($name, $value),
            'unit' => is_string($value) ? $this->unit = $value : parent::assignMember($name, $value),
            'value' => is_float($value) ? $this->value = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
