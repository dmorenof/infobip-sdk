<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N2700ea5ecfd0574f21019319e90eb63416ede8263eab67e466c718c51cd1a77a;

/**
 * BrandAppealPreview
 *
 * Summary information about a single brand appeal.
 */
final class BrandAppealPreview extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Unique identifier of the appeal.
     * Format: uuid
     */
    public string $appealId;
    public \InfobipSDK\Enums\N2700ea5ecfd0574f21019319e90eb63416ede8263eab67e466c718c51cd1a77a\BrandAppealOutcome $outcome;
    /**
     * Reason for rejection. Present only when the appeal status is REJECTED.
     */
    public string $rejectionReason;
    public \InfobipSDK\Enums\N2700ea5ecfd0574f21019319e90eb63416ede8263eab67e466c718c51cd1a77a\BrandAppealStatus $status;
    /**
     * Timestamp when the appeal was submitted.
     * Format: date-time
     */
    public string $submittedAt;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'appealId' => is_string($value) ? $this->appealId = $value : parent::assignMember($name, $value),
            'outcome' => is_string($value) ? $this->outcome = \InfobipSDK\Enums\N2700ea5ecfd0574f21019319e90eb63416ede8263eab67e466c718c51cd1a77a\BrandAppealOutcome::from($value) : parent::assignMember($name, $value),
            'rejectionReason' => is_string($value) ? $this->rejectionReason = $value : parent::assignMember($name, $value),
            'status' => is_string($value) ? $this->status = \InfobipSDK\Enums\N2700ea5ecfd0574f21019319e90eb63416ede8263eab67e466c718c51cd1a77a\BrandAppealStatus::from($value) : parent::assignMember($name, $value),
            'submittedAt' => is_string($value) ? $this->submittedAt = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
