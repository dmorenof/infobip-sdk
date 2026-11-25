<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N0b5f1ca361e90fa0a3f8b907dc53fa34f06ccd85fde4d07f80394e60f5f23c99;

/**
 * Address
 */
final class Address extends \Dmorenof\SdkRuntime\DTO
{
    protected const array WRITE_ONLY_FIELDS = [
    'city',
    'country',
    'countryCode',
    'state',
    'street',
    'type',
    'zip',
];

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
     * Type of an address.
     */
    public \InfobipSDK\Enums\N0b5f1ca361e90fa0a3f8b907dc53fa34f06ccd85fde4d07f80394e60f5f23c99\Address\TypeEnum $type;
    /**
     * Zip value.
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
            'type' => is_string($value) ? $this->type = \InfobipSDK\Enums\N0b5f1ca361e90fa0a3f8b907dc53fa34f06ccd85fde4d07f80394e60f5f23c99\Address\TypeEnum::from($value) : parent::assignMember($name, $value),
            'zip' => is_string($value) ? $this->zip = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
