<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N13d6cf838c63455fe28fcf6ab1b4447c03d816f87ce89525d3cd759ca08a7b1a;

/**
 * DeliveryTime
 */
final class DeliveryTime extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'hour' => [
            'format' => 'int32',
        ],
        'minute' => [
            'format' => 'int32',
        ],
    ];

    /**
     * Format: int32
     */
    public int $hour {
        set {
            $this->assigning('hour', $value);
            $this->hour = $value;
        }
    }
    /**
     * Format: int32
     */
    public int $minute {
        set {
            $this->assigning('minute', $value);
            $this->minute = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'hour' => is_int($value) ? $this->hour = $value : parent::assignMember($name, $value),
            'minute' => is_int($value) ? $this->minute = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
