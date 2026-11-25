<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N284df221d4ea79ba964b452422482b56ed35030dc947e42a2c1842f66361972c;

/**
 * TimeRangeApiResponse
 *
 * A time window.
 */
final class TimeRangeApiResponse extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'from',
        'to',
    ];

    /**
     * Start of the window (UTC, ISO-8601).
     * Example: "2026-09-01T20:00:00.999Z"
     * Format: date-time
     */
    public string $from;
    /**
     * End of the window (UTC, ISO-8601).
     * Example: "2026-09-30T23:59:59.999Z"
     * Format: date-time
     */
    public string $to;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'from' => is_string($value) ? $this->from = $value : parent::assignMember($name, $value),
            'to' => is_string($value) ? $this->to = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
