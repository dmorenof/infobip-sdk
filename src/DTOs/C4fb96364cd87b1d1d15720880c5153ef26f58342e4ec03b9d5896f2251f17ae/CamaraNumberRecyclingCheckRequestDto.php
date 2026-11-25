<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\C4fb96364cd87b1d1d15720880c5153ef26f58342e4ec03b9d5896f2251f17ae;

/**
 * CamaraNumberRecyclingCheckRequestDto
 */
final class CamaraNumberRecyclingCheckRequestDto extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'phoneNumber',
        'specifiedDate',
    ];

    /**
     * Mobile phone number (MSISDN) to verify. The number must be in international format.
     * Example: "+441134961234"
     */
    public string $phoneNumber;
    /**
     * Date (YYYY-MM-DD) against which it is checked whether the phone number has been recycled (i.e. assigned to a new subscriber) since then.
     * Example: "2026-10-26"
     * Format: date
     */
    public string $specifiedDate;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'phoneNumber' => is_string($value) ? $this->phoneNumber = $value : parent::assignMember($name, $value),
            'specifiedDate' => is_string($value) ? $this->specifiedDate = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
