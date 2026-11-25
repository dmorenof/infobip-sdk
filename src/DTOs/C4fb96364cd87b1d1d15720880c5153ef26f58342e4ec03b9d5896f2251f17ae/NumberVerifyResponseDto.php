<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\C4fb96364cd87b1d1d15720880c5153ef26f58342e4ec03b9d5896f2251f17ae;

/**
 * NumberVerifyResponseDto
 *
 * Number verification response object.
 */
final class NumberVerifyResponseDto extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Device verification result.
     */
    public bool $devicePhoneNumberVerified;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'devicePhoneNumberVerified' => is_bool($value) ? $this->devicePhoneNumberVerified = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
