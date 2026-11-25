<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N5cec81334b90b810e64e8923d2a0d906614be46012f19935bf49fd13e921d8b2;

/**
 * PublicSipTrunkServiceAddressRequest
 *
 * SIP trunk service address request.
 */
final class PublicSipTrunkServiceAddressRequest extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'city',
        'countryCode',
        'name',
        'postCode',
        'street',
    ];

    /**
     * SIP trunk service address city.
     */
    public string $city;
    /**
     * SIP trunk service address [country code](#get-countries).
     */
    public string $countryCode;
    /**
     * SIP trunk service address [country region code](#get-regions). Mandatory for countries that have defined regions.
     */
    public string $countryRegionCode;
    /**
     * SIP trunk service address name.
     */
    public string $name;
    /**
     * SIP trunk service address post code.
     */
    public string $postCode;
    /**
     * SIP trunk service address street.
     */
    public string $street;
    /**
     * SIP trunk service address suite.
     */
    public string $suite;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'city' => is_string($value) ? $this->city = $value : parent::assignMember($name, $value),
            'countryCode' => is_string($value) ? $this->countryCode = $value : parent::assignMember($name, $value),
            'countryRegionCode' => is_string($value) ? $this->countryRegionCode = $value : parent::assignMember($name, $value),
            'name' => is_string($value) ? $this->name = $value : parent::assignMember($name, $value),
            'postCode' => is_string($value) ? $this->postCode = $value : parent::assignMember($name, $value),
            'street' => is_string($value) ? $this->street = $value : parent::assignMember($name, $value),
            'suite' => is_string($value) ? $this->suite = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
