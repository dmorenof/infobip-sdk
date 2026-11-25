<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N2700ea5ecfd0574f21019319e90eb63416ede8263eab67e466c718c51cd1a77a;

/**
 * AppealData
 */
final class AppealData extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * The time of the appeal.
     * Format: date-time
     */
    public string $appealDate;
    /**
     * The reason for the appeal.
     */
    public string $appealReason;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'appealDate' => is_string($value) ? $this->appealDate = $value : parent::assignMember($name, $value),
            'appealReason' => is_string($value) ? $this->appealReason = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
