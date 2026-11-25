<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N8bb20f43a591755a249613f66cc72e7e0fcc9b313d81a59f9ca0e0ff261ac181;

/**
 * DeliveryTime
 *
 * The exact time of the day. The time is expressed in the UTC time zone.
 */
final class DeliveryTime extends \Dmorenof\SdkRuntime\DTO
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
