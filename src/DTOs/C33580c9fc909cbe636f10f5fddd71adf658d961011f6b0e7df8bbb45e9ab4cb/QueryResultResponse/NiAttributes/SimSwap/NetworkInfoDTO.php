<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\C33580c9fc909cbe636f10f5fddd71adf658d961011f6b0e7df8bbb45e9ab4cb\QueryResultResponse\NiAttributes\SimSwap;

/**
 * Addition time information about SIM swap occurrence.
 */
final class NetworkInfoDTO extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Ending hour of time frame when SIM swap occurred. This value will is null in case there is no information about occurrence timeframe ending hour.
     * Format: integer
     */
    public float $simSwapPeriodEndHours;
    /**
     * Starting hour of time frame when SIM swap occurred. This value will is null in case there is no information about occurrence timeframe starting hour.
     * Format: integer
     */
    public float $simSwapPeriodStartHours;
    /**
     * Timestamp of SIM swap occurrence. This value will is null in case there is no information about occurrence timestamp.
     */
    public string $simSwapTimestamp;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'simSwapPeriodEndHours' => is_float($value) ? $this->simSwapPeriodEndHours = $value : parent::assignMember($name, $value),
            'simSwapPeriodStartHours' => is_float($value) ? $this->simSwapPeriodStartHours = $value : parent::assignMember($name, $value),
            'simSwapTimestamp' => is_string($value) ? $this->simSwapTimestamp = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
