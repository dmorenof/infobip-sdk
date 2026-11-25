<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N91c858d6e55640d2b6750e23f7ec3df534ca8bee928e5f9b25341eaf73842f14;

/**
 * LocationItem
 *
 * Location of the event.
 */
final class LocationItem extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'title',
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
    'radius' => [
        'minimum' => 0,
    ],
    'title' => [
        'minLength' => 1,
    ],
];

    /**
     * Latitude of the location.
     * Format: double
     */
    public float $latitude {
        set {
            $this->assigning('latitude', $value);
            $this->latitude = $value;
        }
    }
    /**
     * Longitude of the location.
     * Format: double
     */
    public float $longitude {
        set {
            $this->assigning('longitude', $value);
            $this->longitude = $value;
        }
    }
    /**
     * Radius of the location in meters.
     * Format: double
     */
    public float $radius {
        set {
            $this->assigning('radius', $value);
            $this->radius = $value;
        }
    }
    /**
     * Title of the location.
     */
    public string $title {
        set {
            $this->assigning('title', $value);
            $this->title = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'latitude' => is_float($value) ? $this->latitude = $value : parent::assignMember($name, $value),
            'longitude' => is_float($value) ? $this->longitude = $value : parent::assignMember($name, $value),
            'radius' => is_float($value) ? $this->radius = $value : parent::assignMember($name, $value),
            'title' => is_string($value) ? $this->title = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
