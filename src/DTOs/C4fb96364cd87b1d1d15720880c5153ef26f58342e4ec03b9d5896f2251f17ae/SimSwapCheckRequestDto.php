<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\C4fb96364cd87b1d1d15720880c5153ef26f58342e4ec03b9d5896f2251f17ae;

/**
 * SimSwapCheckRequestDto
 *
 * SIM Swap request object.
 */
final class SimSwapCheckRequestDto extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'consentGranted',
    'period',
    'phoneNumber',
];

    protected const array VALIDATION = [
    'period' => [
        'minimum' => 0,
        'format' => 'int32',
    ],
];

    /**
     * Indicates whether you have consent from mobile phone number's owner to perform this request. All requests that do not have this property set to "true" will be rejected.
     * Example: true
     */
    public bool $consentGranted;
    /**
     * SIM swap check will be verified with MNO in "period" amount of hours from when this request was received. The value should be greater than 0.
     * Example: 15
     * Format: int32
     */
    public int $period {
        set {
            $this->assigning('period', $value);
            $this->period = $value;
        }
    }
    /**
     * Mobile phone number (MSISDN) to verify. The number must be in international format.
     * Example: "441134961234"
     */
    public string $phoneNumber;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'consentGranted' => is_bool($value) ? $this->consentGranted = $value : parent::assignMember($name, $value),
            'period' => is_int($value) ? $this->period = $value : parent::assignMember($name, $value),
            'phoneNumber' => is_string($value) ? $this->phoneNumber = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
