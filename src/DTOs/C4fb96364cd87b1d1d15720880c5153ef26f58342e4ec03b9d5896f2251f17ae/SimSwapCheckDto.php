<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\C4fb96364cd87b1d1d15720880c5153ef26f58342e4ec03b9d5896f2251f17ae;

/**
 * SimSwapCheckDto
 *
 * SIM swap check parameters. In case this field is null, no SIM swap checks will be done.
 */
final class SimSwapCheckDto extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'period',
    ];

    protected const array VALIDATION = [
        'period' => [
            'minimum' => 0,
            'format' => 'int32',
        ],
        'proceedOn' => [
            'uniqueItems' => true,
        ],
    ];

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
     * If specified, proceed to the SMV verify in case:
     * - SIM swap check fails
     * - There is no SIM swap coverage
     * - Result of the SIM swap check was unknown
     */
    public \InfobipSDK\Collections\C4fb96364cd87b1d1d15720880c5153ef26f58342e4ec03b9d5896f2251f17ae\SimSwapCheckDto\ProceedOnCollection $proceedOn {
        set {
            $this->assigning('proceedOn', $value);
            $this->proceedOn = $value;
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
