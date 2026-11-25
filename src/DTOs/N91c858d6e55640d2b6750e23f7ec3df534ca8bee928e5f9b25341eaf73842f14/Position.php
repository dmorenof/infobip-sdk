<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N91c858d6e55640d2b6750e23f7ec3df534ca8bee928e5f9b25341eaf73842f14;

/**
 * Position
 *
 * Position of the location.
 */
final class Position extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'latitude',
    'longitude',
];

    protected const array VALIDATION = [
    'latitude' => [
        'minimum' => -90,
        'maximum' => 90,
    ],
    'longitude' => [
        'minimum' => -180,
        'maximum' => 180,
    ],
];

    /**
     * Latitude.
     * Format: double
     */
    public float $latitude {
        set {
            $this->assigning('latitude', $value);
            $this->latitude = $value;
        }
    }
    /**
     * Longitude.
     * Format: double
     */
    public float $longitude {
        set {
            $this->assigning('longitude', $value);
            $this->longitude = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'latitude' => is_float($value) ? $this->latitude = $value : parent::assignMember($name, $value),
            'longitude' => is_float($value) ? $this->longitude = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
