<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\F30d78c250ad1209aef755ddde02bb131e1749b705985f0e9f1b007c900b98e2;

/**
 * TemplateLocationHeaderContent
 */
final class TemplateLocationHeaderContent extends \InfobipSDK\DTOs\F30d78c250ad1209aef755ddde02bb131e1749b705985f0e9f1b007c900b98e2\TemplateHeaderContent
{
    public const array REQUIRED_FIELDS = [
    'type',
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

    protected const string ADDITIONAL_PROPERTIES_TYPE = 'mixed';
    protected const bool ADDITIONAL_PROPERTIES_NULLABLE = false;

    /**
     * Latitude of a location sent in the header.
     * Format: double
     */
    public float $latitude {
        set {
            $this->assigning('latitude', $value);
            $this->latitude = $value;
        }
    }
    /**
     * Longitude of a location sent in the header.
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
