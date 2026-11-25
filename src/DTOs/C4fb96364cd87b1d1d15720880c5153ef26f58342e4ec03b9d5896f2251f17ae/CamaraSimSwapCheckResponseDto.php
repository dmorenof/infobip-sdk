<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\C4fb96364cd87b1d1d15720880c5153ef26f58342e4ec03b9d5896f2251f17ae;

/**
 * CamaraSimSwapCheckResponseDto
 *
 * SIM swap check response object.
 */
final class CamaraSimSwapCheckResponseDto extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Indicates whether the SIM card has been swapped during the period.
     */
    public bool $swapped;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'swapped' => is_bool($value) ? $this->swapped = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
