<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N6a8bbdacebad88e7e0de8bdfd30e29e04d114b9f00175a0482b9e26b742d85d5;

/**
 * RegionalOptions
 *
 * Region-specific parameters, often imposed by local laws. Use this, if country or region that you are sending an SMS to requires additional information.
 */
final class RegionalOptions extends \Dmorenof\SdkRuntime\DTO
{
    public \InfobipSDK\DTOs\N6a8bbdacebad88e7e0de8bdfd30e29e04d114b9f00175a0482b9e26b742d85d5\IndiaDltOptions $indiaDlt;
    public \InfobipSDK\DTOs\N6a8bbdacebad88e7e0de8bdfd30e29e04d114b9f00175a0482b9e26b742d85d5\SouthKoreaOptions $southKorea;
    public \InfobipSDK\DTOs\N6a8bbdacebad88e7e0de8bdfd30e29e04d114b9f00175a0482b9e26b742d85d5\TurkeyIysOptions $turkeyIys;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'indiaDlt' => $value instanceof \stdClass ? $this->indiaDlt = new \InfobipSDK\DTOs\N6a8bbdacebad88e7e0de8bdfd30e29e04d114b9f00175a0482b9e26b742d85d5\IndiaDltOptions($value) : parent::assignMember($name, $value),
            'southKorea' => $value instanceof \stdClass ? $this->southKorea = new \InfobipSDK\DTOs\N6a8bbdacebad88e7e0de8bdfd30e29e04d114b9f00175a0482b9e26b742d85d5\SouthKoreaOptions($value) : parent::assignMember($name, $value),
            'turkeyIys' => $value instanceof \stdClass ? $this->turkeyIys = new \InfobipSDK\DTOs\N6a8bbdacebad88e7e0de8bdfd30e29e04d114b9f00175a0482b9e26b742d85d5\TurkeyIysOptions($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
