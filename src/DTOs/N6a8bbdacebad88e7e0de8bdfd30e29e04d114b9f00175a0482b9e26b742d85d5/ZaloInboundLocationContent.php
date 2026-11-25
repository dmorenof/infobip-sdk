<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N6a8bbdacebad88e7e0de8bdfd30e29e04d114b9f00175a0482b9e26b742d85d5;

/**
 * ZaloInboundLocationContent
 */
final class ZaloInboundLocationContent extends \InfobipSDK\DTOs\N6a8bbdacebad88e7e0de8bdfd30e29e04d114b9f00175a0482b9e26b742d85d5\ZaloInboundContent
{
    public const array REQUIRED_FIELDS = [];

    protected const string ADDITIONAL_PROPERTIES_TYPE = 'mixed';
    protected const bool ADDITIONAL_PROPERTIES_NULLABLE = false;

    /**
     * Format: double
     */
    public float $latitude;
    /**
     * Format: double
     */
    public float $longitude;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'latitude' => is_float($value) ? $this->latitude = $value : parent::assignMember($name, $value),
            'longitude' => is_float($value) ? $this->longitude = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
