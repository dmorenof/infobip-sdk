<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\Faad2f34157fead7bc36bdf18ea6d8be6674c0ceb93de05135894a2bf0f2aa1b;

/**
 * GeoLocationInfoWrapper
 *
 * Geolocation data such as Country and City.
 */
final class GeoLocationInfoWrapper extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * City where the user action is recorded.
     */
    public string $city;
    /**
     * Country where the user action is recorded.
     */
    public string $countryName;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'city' => is_string($value) ? $this->city = $value : parent::assignMember($name, $value),
            'countryName' => is_string($value) ? $this->countryName = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
