<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\C4fb96364cd87b1d1d15720880c5153ef26f58342e4ec03b9d5896f2251f17ae;

/**
 * CamaraDeviceLocationVerifyRequestDto
 */
final class CamaraDeviceLocationVerifyRequestDto extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'accuracy',
        'latitude',
        'longitude',
        'ueId',
    ];

    protected const array VALIDATION = [
        'accuracy' => [
            'minimum' => 2,
            'maximum' => 200,
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
        'uePort' => [
            'minimum' => 0,
            'maximum' => 65535,
            'format' => 'int32',
        ],
    ];

    /**
     * Radius of the circle in kilometers.
     * Example: 10
     * Format: int32
     */
    public int $accuracy {
        set {
            $this->assigning('accuracy', $value);
            $this->accuracy = $value;
        }
    }
    /**
     * Latitude of the location.
     * Example: 51.5074
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
     * Example: -0.1278
     * Format: double
     */
    public float $longitude {
        set {
            $this->assigning('longitude', $value);
            $this->longitude = $value;
        }
    }
    public \InfobipSDK\DTOs\C4fb96364cd87b1d1d15720880c5153ef26f58342e4ec03b9d5896f2251f17ae\CamaraUserEquipmentIdentifierDto $ueId;
    /**
     * User equipment port.
     * Example: 8080
     * Format: int32
     */
    public int $uePort {
        set {
            $this->assigning('uePort', $value);
            $this->uePort = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'accuracy' => is_int($value) ? $this->accuracy = $value : parent::assignMember($name, $value),
            'latitude' => is_float($value) ? $this->latitude = $value : parent::assignMember($name, $value),
            'longitude' => is_float($value) ? $this->longitude = $value : parent::assignMember($name, $value),
            'ueId' => $value instanceof \stdClass ? $this->ueId = new \InfobipSDK\DTOs\C4fb96364cd87b1d1d15720880c5153ef26f58342e4ec03b9d5896f2251f17ae\CamaraUserEquipmentIdentifierDto($value) : parent::assignMember($name, $value),
            'uePort' => is_int($value) ? $this->uePort = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
