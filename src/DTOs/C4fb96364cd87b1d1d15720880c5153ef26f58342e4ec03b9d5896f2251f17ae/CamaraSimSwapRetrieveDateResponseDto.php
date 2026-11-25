<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\C4fb96364cd87b1d1d15720880c5153ef26f58342e4ec03b9d5896f2251f17ae;

/**
 * CamaraSimSwapRetrieveDateResponseDto
 *
 * SIM swap retrieve date response object.
 */
final class CamaraSimSwapRetrieveDateResponseDto extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Timestamp of the latest SIM swap event.
     * Format: date-time
     */
    public string $latestSimChange;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'latestSimChange' => is_string($value) ? $this->latestSimChange = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
