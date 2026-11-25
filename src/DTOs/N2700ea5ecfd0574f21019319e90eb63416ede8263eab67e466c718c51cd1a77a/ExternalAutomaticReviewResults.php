<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N2700ea5ecfd0574f21019319e90eb63416ede8263eab67e466c718c51cd1a77a;

/**
 * ExternalAutomaticReviewResults
 */
final class ExternalAutomaticReviewResults extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * List of compliance errors found during the AI campaign review. Empty when the review is still processing or the campaign is compliant.
     */
    public \InfobipSDK\Collections\N2700ea5ecfd0574f21019319e90eb63416ede8263eab67e466c718c51cd1a77a\ExternalAutomaticReviewResults\CampaignErrorsCollection $campaignErrors;
    public \InfobipSDK\Enums\N2700ea5ecfd0574f21019319e90eb63416ede8263eab67e466c718c51cd1a77a\ExternalAutomaticReviewStatus $reviewStatus;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'campaignErrors' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->campaignErrors = new \InfobipSDK\Collections\N2700ea5ecfd0574f21019319e90eb63416ede8263eab67e466c718c51cd1a77a\ExternalAutomaticReviewResults\CampaignErrorsCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \InfobipSDK\DTOs\N2700ea5ecfd0574f21019319e90eb63416ede8263eab67e466c718c51cd1a77a\ExternalAutomaticReviewError::class)) : parent::assignMember($name, $value),
            'reviewStatus' => is_string($value) ? $this->reviewStatus = \InfobipSDK\Enums\N2700ea5ecfd0574f21019319e90eb63416ede8263eab67e466c718c51cd1a77a\ExternalAutomaticReviewStatus::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
