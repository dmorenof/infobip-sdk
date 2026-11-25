<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N25bc6165974db08bf3072efbf58365d643c5a11027c569c8010b72d1e1d5233f;

/**
 * DailyWorkingHoursApiModel
 *
 * List of working hours work days.
 * It must contain all days of the week with 3 parameters each: `startTime`, `endTime` and `enabled`.
 */
final class DailyWorkingHoursApiModel extends \Dmorenof\SdkRuntime\DTO
{
    protected const array MODEL_VALIDATION = [
    'jsonSchema' => '{"enum":["FRIDAY","MONDAY","SATURDAY","SUNDAY","THURSDAY","TUESDAY","WEDNESDAY"]}',
];

    protected const array VALIDATION = [
    'endTime' => [
        'minimum' => 0,
        'maximum' => 1440,
        'format' => 'int32',
    ],
    'startTime' => [
        'minimum' => 0,
        'maximum' => 1440,
        'format' => 'int32',
    ],
];

    /**
     * Daily working hours enable/disable toggle.
     */
    public bool $enabled;
    /**
     * End time of the day in minutes before midnight.
     * Format: int32
     */
    public int $endTime {
        set {
            $this->assigning('endTime', $value);
            $this->endTime = $value;
        }
    }
    /**
     * Start time of the day in minutes after midnight.
     * Format: int32
     */
    public int $startTime {
        set {
            $this->assigning('startTime', $value);
            $this->startTime = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'enabled' => is_bool($value) ? $this->enabled = $value : parent::assignMember($name, $value),
            'endTime' => is_int($value) ? $this->endTime = $value : parent::assignMember($name, $value),
            'startTime' => is_int($value) ? $this->startTime = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
