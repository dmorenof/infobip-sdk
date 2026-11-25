<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\F30d78c250ad1209aef755ddde02bb131e1749b705985f0e9f1b007c900b98e2;

/**
 * InteractiveOrderDetailsImporterAddress
 *
 * Importer address. Required when catalogId is not provided. It's supported only for UPI PayU payments.
 */
final class InteractiveOrderDetailsImporterAddress extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * City.
     */
    public string $city;
    /**
     * Country code.
     */
    public string $countryCode;
    /**
     * First line of the address.
     */
    public string $firstAddressLine;
    /**
     * Postal code.
     */
    public string $postalCode;
    /**
     * Second line of the address.
     */
    public string $secondAddressLine;
    /**
     * Zone code.
     */
    public string $zoneCode;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'city' => is_string($value) ? $this->city = $value : parent::assignMember($name, $value),
            'countryCode' => is_string($value) ? $this->countryCode = $value : parent::assignMember($name, $value),
            'firstAddressLine' => is_string($value) ? $this->firstAddressLine = $value : parent::assignMember($name, $value),
            'postalCode' => is_string($value) ? $this->postalCode = $value : parent::assignMember($name, $value),
            'secondAddressLine' => is_string($value) ? $this->secondAddressLine = $value : parent::assignMember($name, $value),
            'zoneCode' => is_string($value) ? $this->zoneCode = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
