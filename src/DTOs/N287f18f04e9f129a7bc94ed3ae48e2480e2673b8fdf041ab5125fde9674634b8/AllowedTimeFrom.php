<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N287f18f04e9f129a7bc94ed3ae48e2480e2673b8fdf041ab5125fde9674634b8;

/**
 * AllowedTimeFrom
 *
 * The exact time of day to enable call forwarding. Time is expressed in the `UTC` time zone. If not set, defaults to `00:00:00`.
 */
final class AllowedTimeFrom extends \Dmorenof\SdkRuntime\DTO
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
     * Hour when the time window opens.
     * Format: int32
     */
    public int $hour {
        set {
            $this->assigning('hour', $value);
            $this->hour = $value;
        }
    }
    /**
     * Minute when the time window opens.
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
