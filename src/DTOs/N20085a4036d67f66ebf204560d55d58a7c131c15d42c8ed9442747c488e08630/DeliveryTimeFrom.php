<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N20085a4036d67f66ebf204560d55d58a7c131c15d42c8ed9442747c488e08630;

/**
 * DeliveryTimeFrom
 *
 * The exact time of day to start sending messages. Time is expressed in the UTC time zone. If set, use it together with the `to` property with minimum 1 hour difference.
 */
final class DeliveryTimeFrom extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'hour',
        'minute',
    ];

    protected const array VALIDATION = [
        'hour' => [
            'minimum' => 0,
            'maximum' => 23,
            'format' => 'int32',
        ],
        'minute' => [
            'minimum' => 0,
            'maximum' => 59,
            'format' => 'int32',
        ],
    ];

    protected const array WRITE_ONLY_FIELDS = [
        'hour',
        'minute',
    ];

    /**
     * Hour when the time window opens when used in the `from` property or closes when used in the `to` property.
     * Format: int32
     */
    public int $hour {
        set {
            $this->assigning('hour', $value);
            $this->hour = $value;
        }
    }
    /**
     * Minute when the time window opens when used in the `from` property or closes when used in the `to` property.
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
