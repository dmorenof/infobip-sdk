<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N2700ea5ecfd0574f21019319e90eb63416ede8263eab67e466c718c51cd1a77a;

/**
 * PriorityInfo
 *
 * Priority information used in latest campaign review.
 */
final class PriorityInfo extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Id of a priority
     * Format: uuid
     */
    public string $priorityId;
    /**
     * Date submitted for review
     * Format: date-time
     */
    public string $submittedDate;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'priorityId' => is_string($value) ? $this->priorityId = $value : parent::assignMember($name, $value),
            'submittedDate' => is_string($value) ? $this->submittedDate = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
