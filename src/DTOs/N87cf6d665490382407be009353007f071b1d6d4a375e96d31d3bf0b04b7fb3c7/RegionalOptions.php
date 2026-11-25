<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N87cf6d665490382407be009353007f071b1d6d4a375e96d31d3bf0b04b7fb3c7;

/**
 * RegionalOptions
 *
 * Region-specific parameters, often imposed by local laws. Use this, if country or region that you are sending an SMS to requires additional information.
 */
final class RegionalOptions extends \Dmorenof\SdkRuntime\DTO
{
    public \InfobipSDK\DTOs\N87cf6d665490382407be009353007f071b1d6d4a375e96d31d3bf0b04b7fb3c7\IndiaDltOptions $indiaDlt;
    public \InfobipSDK\DTOs\N87cf6d665490382407be009353007f071b1d6d4a375e96d31d3bf0b04b7fb3c7\SouthKoreaOptions $southKorea;
    public \InfobipSDK\DTOs\N87cf6d665490382407be009353007f071b1d6d4a375e96d31d3bf0b04b7fb3c7\TurkeyIysOptions $turkeyIys;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'indiaDlt' => $value instanceof \stdClass ? $this->indiaDlt = new \InfobipSDK\DTOs\N87cf6d665490382407be009353007f071b1d6d4a375e96d31d3bf0b04b7fb3c7\IndiaDltOptions($value) : parent::assignMember($name, $value),
            'southKorea' => $value instanceof \stdClass ? $this->southKorea = new \InfobipSDK\DTOs\N87cf6d665490382407be009353007f071b1d6d4a375e96d31d3bf0b04b7fb3c7\SouthKoreaOptions($value) : parent::assignMember($name, $value),
            'turkeyIys' => $value instanceof \stdClass ? $this->turkeyIys = new \InfobipSDK\DTOs\N87cf6d665490382407be009353007f071b1d6d4a375e96d31d3bf0b04b7fb3c7\TurkeyIysOptions($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
