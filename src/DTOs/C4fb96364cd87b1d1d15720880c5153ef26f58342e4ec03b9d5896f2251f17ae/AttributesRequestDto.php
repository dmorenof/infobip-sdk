<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\C4fb96364cd87b1d1d15720880c5153ef26f58342e4ec03b9d5896f2251f17ae;

/**
 * AttributesRequestDto
 *
 * Object with parameters per attribute for Number Intelligence to query.<br/>
 * Attribute value <strong>MUST NOT</strong> be <strong>null</strong> as in that case it will be ignored.<br/>
 * In some cases where attribute value has no parameters it <strong>NEEDS TO BE</strong> an empty object.
 * Example: {"simSwap":{"period":24},"nationalIdentityNumber":{"nationalId":"123.456.789-10"}}
 */
final class AttributesRequestDto extends \Dmorenof\SdkRuntime\DTO
{
    public \InfobipSDK\DTOs\C4fb96364cd87b1d1d15720880c5153ef26f58342e4ec03b9d5896f2251f17ae\DeviceLocationRequestDto $deviceLocation;
    public \InfobipSDK\DTOs\C4fb96364cd87b1d1d15720880c5153ef26f58342e4ec03b9d5896f2251f17ae\NationalIdentityNumberDto $nationalIdentityNumber;
    public \InfobipSDK\DTOs\C4fb96364cd87b1d1d15720880c5153ef26f58342e4ec03b9d5896f2251f17ae\SimSwapRequestDto $simSwap;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'deviceLocation' => $value instanceof \stdClass ? $this->deviceLocation = new \InfobipSDK\DTOs\C4fb96364cd87b1d1d15720880c5153ef26f58342e4ec03b9d5896f2251f17ae\DeviceLocationRequestDto($value) : parent::assignMember($name, $value),
            'nationalIdentityNumber' => $value instanceof \stdClass ? $this->nationalIdentityNumber = new \InfobipSDK\DTOs\C4fb96364cd87b1d1d15720880c5153ef26f58342e4ec03b9d5896f2251f17ae\NationalIdentityNumberDto($value) : parent::assignMember($name, $value),
            'simSwap' => $value instanceof \stdClass ? $this->simSwap = new \InfobipSDK\DTOs\C4fb96364cd87b1d1d15720880c5153ef26f58342e4ec03b9d5896f2251f17ae\SimSwapRequestDto($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
