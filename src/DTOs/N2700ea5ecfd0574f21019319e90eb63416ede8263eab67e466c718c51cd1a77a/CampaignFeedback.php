<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N2700ea5ecfd0574f21019319e90eb63416ede8263eab67e466c718c51cd1a77a;

/**
 * CampaignFeedback
 *
 * Offers additional information regarding the campaign, includes rejection reason and time.
 */
final class CampaignFeedback extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * The time of the rejection.
     * Format: date-time
     */
    public string $rejectionDate;
    /**
     * Rejection reasons details.
     */
    public \InfobipSDK\Collections\N2700ea5ecfd0574f21019319e90eb63416ede8263eab67e466c718c51cd1a77a\CampaignFeedback\RejectionDetailsCollection $rejectionDetails;
    /**
     * The reasons for the rejection.
     */
    public \InfobipSDK\Collections\StringCollection $rejectionReasons;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'rejectionDate' => is_string($value) ? $this->rejectionDate = $value : parent::assignMember($name, $value),
            'rejectionDetails' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->rejectionDetails = new \InfobipSDK\Collections\N2700ea5ecfd0574f21019319e90eb63416ede8263eab67e466c718c51cd1a77a\CampaignFeedback\RejectionDetailsCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \InfobipSDK\DTOs\N2700ea5ecfd0574f21019319e90eb63416ede8263eab67e466c718c51cd1a77a\RejectionReason::class)) : parent::assignMember($name, $value),
            'rejectionReasons' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->rejectionReasons = new \InfobipSDK\Collections\StringCollection($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
