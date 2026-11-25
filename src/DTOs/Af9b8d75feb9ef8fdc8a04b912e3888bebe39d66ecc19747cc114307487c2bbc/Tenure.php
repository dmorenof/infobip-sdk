<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\Af9b8d75feb9ef8fdc8a04b912e3888bebe39d66ecc19747cc114307487c2bbc;

/**
 * Tenure
 *
 * Tenure response object
 */
final class Tenure extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Date of the first interaction with the phone number, in ISO 8601 format
     * Example: "2025-01-15"
     * Format: date
     */
    public ?string $firstSeen;
    /**
     * Date of the last interaction with the phone number, in ISO 8601 format
     * Example: "2025-03-20"
     * Format: date
     */
    public ?string $lastSeen;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'firstSeen' => $value === null || is_string($value) ? $this->firstSeen = $value : parent::assignMember($name, $value),
            'lastSeen' => $value === null || is_string($value) ? $this->lastSeen = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
