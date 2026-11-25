<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N20085a4036d67f66ebf204560d55d58a7c131c15d42c8ed9442747c488e08630;

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
