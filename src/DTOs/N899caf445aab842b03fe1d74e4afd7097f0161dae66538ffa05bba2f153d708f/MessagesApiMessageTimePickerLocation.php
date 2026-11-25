<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N899caf445aab842b03fe1d74e4afd7097f0161dae66538ffa05bba2f153d708f;

/**
 * MessagesApiMessageTimePickerLocation
 *
 * Location of the event.
 */
final class MessagesApiMessageTimePickerLocation extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'latitude',
        'longitude',
        'name',
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
        'name' => [
            'minLength' => 1,
        ],
        'radius' => [
            'minimum' => 0,
            'maximum' => 1000000,
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
     * Name of the location.
     */
    public string $name {
        set {
            $this->assigning('name', $value);
            $this->name = $value;
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

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'latitude' => is_float($value) ? $this->latitude = $value : parent::assignMember($name, $value),
            'longitude' => is_float($value) ? $this->longitude = $value : parent::assignMember($name, $value),
            'name' => is_string($value) ? $this->name = $value : parent::assignMember($name, $value),
            'radius' => is_float($value) ? $this->radius = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
