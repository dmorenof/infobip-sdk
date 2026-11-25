<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N5cec81334b90b810e64e8923d2a0d906614be46012f19935bf49fd13e921d8b2;

/**
 * PublicSipTrunkServiceAddress
 */
final class PublicSipTrunkServiceAddress extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * SIP trunk service address city.
     */
    public string $city;
    public \InfobipSDK\DTOs\N5cec81334b90b810e64e8923d2a0d906614be46012f19935bf49fd13e921d8b2\PublicCountry $country;
    /**
     * SIP trunk service address ID.
     */
    public string $id;
    /**
     * SIP trunk service address name.
     */
    public string $name;
    /**
     * SIP trunk service address post code.
     */
    public string $postCode;
    public \InfobipSDK\DTOs\N5cec81334b90b810e64e8923d2a0d906614be46012f19935bf49fd13e921d8b2\PublicRegion $region;
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
            'country' => $value instanceof \stdClass ? $this->country = new \InfobipSDK\DTOs\N5cec81334b90b810e64e8923d2a0d906614be46012f19935bf49fd13e921d8b2\PublicCountry($value) : parent::assignMember($name, $value),
            'id' => is_string($value) ? $this->id = $value : parent::assignMember($name, $value),
            'name' => is_string($value) ? $this->name = $value : parent::assignMember($name, $value),
            'postCode' => is_string($value) ? $this->postCode = $value : parent::assignMember($name, $value),
            'region' => $value instanceof \stdClass ? $this->region = new \InfobipSDK\DTOs\N5cec81334b90b810e64e8923d2a0d906614be46012f19935bf49fd13e921d8b2\PublicRegion($value) : parent::assignMember($name, $value),
            'street' => is_string($value) ? $this->street = $value : parent::assignMember($name, $value),
            'suite' => is_string($value) ? $this->suite = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
