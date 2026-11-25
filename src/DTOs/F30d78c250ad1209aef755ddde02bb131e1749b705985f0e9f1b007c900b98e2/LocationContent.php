<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\F30d78c250ad1209aef755ddde02bb131e1749b705985f0e9f1b007c900b98e2;

/**
 * LocationContent
 *
 * The content object to build a message that will be sent.
 */
final class LocationContent extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'latitude',
        'longitude',
    ];

    protected const array VALIDATION = [
        'address' => [
            'minLength' => 0,
            'maxLength' => 1000,
        ],
        'latitude' => [
            'minimum' => -90,
            'maximum' => 90,
        ],
        'longitude' => [
            'minimum' => -180,
            'maximum' => 180,
        ],
        'name' => [
            'minLength' => 0,
            'maxLength' => 1000,
        ],
    ];

    /**
     * Location address.
     */
    public string $address {
        set {
            $this->assigning('address', $value);
            $this->address = $value;
        }
    }
    /**
     * Latitude of a location sent in the WhatsApp message.
     * Format: double
     */
    public float $latitude {
        set {
            $this->assigning('latitude', $value);
            $this->latitude = $value;
        }
    }
    /**
     * Longitude of a location sent in the WhatsApp message.
     * Format: double
     */
    public float $longitude {
        set {
            $this->assigning('longitude', $value);
            $this->longitude = $value;
        }
    }
    /**
     * Location name.
     */
    public string $name {
        set {
            $this->assigning('name', $value);
            $this->name = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'address' => is_string($value) ? $this->address = $value : parent::assignMember($name, $value),
            'latitude' => is_float($value) ? $this->latitude = $value : parent::assignMember($name, $value),
            'longitude' => is_float($value) ? $this->longitude = $value : parent::assignMember($name, $value),
            'name' => is_string($value) ? $this->name = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
