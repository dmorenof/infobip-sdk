<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N2700ea5ecfd0574f21019319e90eb63416ede8263eab67e466c718c51cd1a77a;

/**
 * CampaignStatusWebhookContent
 *
 * Event content.
 */
final class CampaignStatusWebhookContent extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * The ID of campaign.
     * Example: "38a1c2c6-55f2-11ee-a061-325096b39f47"
     * Format: uuid
     */
    public string $campaignId;
    public \InfobipSDK\Enums\N2700ea5ecfd0574f21019319e90eb63416ede8263eab67e466c718c51cd1a77a\WebhookCampaignStage $campaignStatus;
    /**
     * The rejection date. This field is present only when new campaign registration status is 'REJECTED'.
     * Format: date-time
     */
    public string $rejectionDate;
    /**
     * The rejection reasons details. This field is present only when new campaign registration status is 'REJECTED'.
     */
    public \InfobipSDK\Collections\N2700ea5ecfd0574f21019319e90eb63416ede8263eab67e466c718c51cd1a77a\CampaignStatusWebhookContent\RejectionDetailsCollection $rejectionDetails;
    /**
     * The rejection reasons. This field is present only when new campaign registration status is 'REJECTED'.
     * Example: "Unable to verify, need website."
     */
    public string $rejectionReasons;
    /**
     * The ID of the campaign as defined by The Campaign Registry. This field is present only for 10DLC campaigns.
     * Example: "C0O3XVU"
     */
    public string $tcrId;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'campaignId' => is_string($value) ? $this->campaignId = $value : parent::assignMember($name, $value),
            'campaignStatus' => is_string($value) ? $this->campaignStatus = \InfobipSDK\Enums\N2700ea5ecfd0574f21019319e90eb63416ede8263eab67e466c718c51cd1a77a\WebhookCampaignStage::from($value) : parent::assignMember($name, $value),
            'rejectionDate' => is_string($value) ? $this->rejectionDate = $value : parent::assignMember($name, $value),
            'rejectionDetails' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->rejectionDetails = new \InfobipSDK\Collections\N2700ea5ecfd0574f21019319e90eb63416ede8263eab67e466c718c51cd1a77a\CampaignStatusWebhookContent\RejectionDetailsCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \InfobipSDK\DTOs\N2700ea5ecfd0574f21019319e90eb63416ede8263eab67e466c718c51cd1a77a\RejectionReasonPayload::class)) : parent::assignMember($name, $value),
            'rejectionReasons' => is_string($value) ? $this->rejectionReasons = $value : parent::assignMember($name, $value),
            'tcrId' => is_string($value) ? $this->tcrId = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
