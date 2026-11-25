<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\C4fb96364cd87b1d1d15720880c5153ef26f58342e4ec03b9d5896f2251f17ae;

/**
 * DeviceLocationRequestDto
 *
 * Check if provided MSISDN is in location defined by provided coordinates.
 */
final class DeviceLocationRequestDto extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
    'accuracy' => [
        'minimum' => 2,
        'maximum' => 20,
        'format' => 'int32',
    ],
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
     * Accuracy in km that will be used to check for location of a mobile phone for provided phone number.
     * Format: int32
     */
    public int $accuracy {
        set {
            $this->assigning('accuracy', $value);
            $this->accuracy = $value;
        }
    }
    /**
     * Latitude that will be used to check for location of a mobile phone for provided phone number.
     * Format: float
     */
    public float $latitude {
        set {
            $this->assigning('latitude', $value);
            $this->latitude = $value;
        }
    }
    /**
     * Longitude that will be used to check for location of a mobile phone for provided phone number.
     * Format: float
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
            'accuracy' => is_int($value) ? $this->accuracy = $value : parent::assignMember($name, $value),
            'latitude' => is_float($value) ? $this->latitude = $value : parent::assignMember($name, $value),
            'longitude' => is_float($value) ? $this->longitude = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
