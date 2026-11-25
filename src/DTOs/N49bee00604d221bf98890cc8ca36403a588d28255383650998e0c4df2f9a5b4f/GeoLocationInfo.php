<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N49bee00604d221bf98890cc8ca36403a588d28255383650998e0c4df2f9a5b4f;

/**
 * GeoLocationInfo
 *
 * Geolocation data such as Country and City. This data will be available only for opens, clicks and unsubscribes.
 */
final class GeoLocationInfo extends \Dmorenof\SdkRuntime\DTO
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
