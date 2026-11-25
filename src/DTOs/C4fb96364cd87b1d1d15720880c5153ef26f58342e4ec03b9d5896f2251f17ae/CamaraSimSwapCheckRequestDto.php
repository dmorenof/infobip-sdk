<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\C4fb96364cd87b1d1d15720880c5153ef26f58342e4ec03b9d5896f2251f17ae;

/**
 * CamaraSimSwapCheckRequestDto
 */
final class CamaraSimSwapCheckRequestDto extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'phoneNumber',
    ];

    protected const array VALIDATION = [
        'maxAge' => [
            'minimum' => 1,
            'maximum' => 2400,
            'format' => 'int32',
        ],
    ];

    /**
     * SIM swap check will be verified with MNO in "period" amount of hours from when this request was received. The value should be greater than 0.
     * Example: 15
     * Format: int32
     */
    public int $maxAge {
        set {
            $this->assigning('maxAge', $value);
            $this->maxAge = $value;
        }
    }
    /**
     * Mobile phone number (MSISDN) to verify. The number must be in international format.
     * Example: "+441134961234"
     */
    public string $phoneNumber;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'maxAge' => is_int($value) ? $this->maxAge = $value : parent::assignMember($name, $value),
            'phoneNumber' => is_string($value) ? $this->phoneNumber = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
