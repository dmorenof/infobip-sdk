<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\C4fb96364cd87b1d1d15720880c5153ef26f58342e4ec03b9d5896f2251f17ae;

/**
 * SimSwapRequestDto
 *
 * Check if sim swap has occurred for requested MSISDN in provided time period.
 */
final class SimSwapRequestDto extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'period' => [
            'minimum' => 0,
            'format' => 'int32',
        ],
    ];

    /**
     * If SIM swap attribute is included it will be verified with MNO allowed hour period.
     * The value should be greater than 0.
     *
     * Example: 15
     * Format: int32
     */
    public int $period {
        set {
            $this->assigning('period', $value);
            $this->period = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'period' => is_int($value) ? $this->period = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
