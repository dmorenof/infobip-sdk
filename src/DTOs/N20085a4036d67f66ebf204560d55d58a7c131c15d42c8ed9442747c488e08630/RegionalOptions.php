<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N20085a4036d67f66ebf204560d55d58a7c131c15d42c8ed9442747c488e08630;

/**
 * RegionalOptions
 *
 * Region-specific parameters, often imposed by local laws. Use this, if country or region that you are sending an SMS to requires additional information.
 */
final class RegionalOptions extends \Dmorenof\SdkRuntime\DTO
{
    public \InfobipSDK\DTOs\N20085a4036d67f66ebf204560d55d58a7c131c15d42c8ed9442747c488e08630\IndiaDltOptions $indiaDlt;
    public \InfobipSDK\DTOs\N20085a4036d67f66ebf204560d55d58a7c131c15d42c8ed9442747c488e08630\SouthKoreaOptions $southKorea;
    public \InfobipSDK\DTOs\N20085a4036d67f66ebf204560d55d58a7c131c15d42c8ed9442747c488e08630\TurkeyIysOptions $turkeyIys;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'indiaDlt' => $value instanceof \stdClass ? $this->indiaDlt = new \InfobipSDK\DTOs\N20085a4036d67f66ebf204560d55d58a7c131c15d42c8ed9442747c488e08630\IndiaDltOptions($value) : parent::assignMember($name, $value),
            'southKorea' => $value instanceof \stdClass ? $this->southKorea = new \InfobipSDK\DTOs\N20085a4036d67f66ebf204560d55d58a7c131c15d42c8ed9442747c488e08630\SouthKoreaOptions($value) : parent::assignMember($name, $value),
            'turkeyIys' => $value instanceof \stdClass ? $this->turkeyIys = new \InfobipSDK\DTOs\N20085a4036d67f66ebf204560d55d58a7c131c15d42c8ed9442747c488e08630\TurkeyIysOptions($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
