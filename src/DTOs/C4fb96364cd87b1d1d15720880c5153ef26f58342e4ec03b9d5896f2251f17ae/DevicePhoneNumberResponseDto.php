<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\C4fb96364cd87b1d1d15720880c5153ef26f58342e4ec03b9d5896f2251f17ae;

/**
 * DevicePhoneNumberResponseDto
 *
 * Device phone number response object.
 */
final class DevicePhoneNumberResponseDto extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Device phone number result.
     */
    public string $devicePhoneNumber;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'devicePhoneNumber' => is_string($value) ? $this->devicePhoneNumber = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
