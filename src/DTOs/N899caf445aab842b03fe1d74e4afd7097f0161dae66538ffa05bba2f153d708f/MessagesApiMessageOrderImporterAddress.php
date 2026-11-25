<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N899caf445aab842b03fe1d74e4afd7097f0161dae66538ffa05bba2f153d708f;

/**
 * MessagesApiMessageOrderImporterAddress
 *
 * Address of the importer. Required when catalogId is not provided.
 */
final class MessagesApiMessageOrderImporterAddress extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * City name.
     */
    public string $city;
    /**
     * Country code value.
     */
    public string $countryCode;
    /**
     * First address line.
     */
    public string $firstAddressLine;
    /**
     * Zip code value.
     */
    public string $postalCode;
    /**
     * Second address line.
     */
    public string $secondAddressLine;
    /**
     * Zone code value.
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
