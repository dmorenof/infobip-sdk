<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N53932f53b54839fd583eae39fe878805e79c364296f164379eb97a5f2c4b6c59;

/**
 * RegionalOptions
 *
 * Region-specific parameters, often imposed by local laws. Use this, if country or region that you are sending an SMS to requires additional information.
 */
final class RegionalOptions extends \Dmorenof\SdkRuntime\DTO
{
    public \InfobipSDK\DTOs\N53932f53b54839fd583eae39fe878805e79c364296f164379eb97a5f2c4b6c59\IndiaDltOptions $indiaDlt;
    public \InfobipSDK\DTOs\N53932f53b54839fd583eae39fe878805e79c364296f164379eb97a5f2c4b6c59\SouthKoreaOptions $southKorea;
    public \InfobipSDK\DTOs\N53932f53b54839fd583eae39fe878805e79c364296f164379eb97a5f2c4b6c59\TurkeyIysOptions $turkeyIys;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'indiaDlt' => $value instanceof \stdClass ? $this->indiaDlt = new \InfobipSDK\DTOs\N53932f53b54839fd583eae39fe878805e79c364296f164379eb97a5f2c4b6c59\IndiaDltOptions($value) : parent::assignMember($name, $value),
            'southKorea' => $value instanceof \stdClass ? $this->southKorea = new \InfobipSDK\DTOs\N53932f53b54839fd583eae39fe878805e79c364296f164379eb97a5f2c4b6c59\SouthKoreaOptions($value) : parent::assignMember($name, $value),
            'turkeyIys' => $value instanceof \stdClass ? $this->turkeyIys = new \InfobipSDK\DTOs\N53932f53b54839fd583eae39fe878805e79c364296f164379eb97a5f2c4b6c59\TurkeyIysOptions($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
