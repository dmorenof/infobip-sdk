<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\F30d78c250ad1209aef755ddde02bb131e1749b705985f0e9f1b007c900b98e2;

/**
 * InboundAddress
 *
 * Array of addresses information.
 */
final class InboundAddress extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * City name.
     */
    public string $city;
    /**
     * Country name.
     */
    public string $country;
    /**
     * Country code value.
     */
    public string $countryCode;
    /**
     * State name.
     */
    public string $state;
    /**
     * Street name.
     */
    public string $street;
    /**
     * Type of the address. Can be `HOME` or `WORK`.
     */
    public string $type;
    /**
     * Zip code value.
     */
    public string $zip;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'city' => is_string($value) ? $this->city = $value : parent::assignMember($name, $value),
            'country' => is_string($value) ? $this->country = $value : parent::assignMember($name, $value),
            'countryCode' => is_string($value) ? $this->countryCode = $value : parent::assignMember($name, $value),
            'state' => is_string($value) ? $this->state = $value : parent::assignMember($name, $value),
            'street' => is_string($value) ? $this->street = $value : parent::assignMember($name, $value),
            'type' => is_string($value) ? $this->type = $value : parent::assignMember($name, $value),
            'zip' => is_string($value) ? $this->zip = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
