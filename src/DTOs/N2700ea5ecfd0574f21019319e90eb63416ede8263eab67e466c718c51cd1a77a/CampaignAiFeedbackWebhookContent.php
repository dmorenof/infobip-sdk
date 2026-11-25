<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N2700ea5ecfd0574f21019319e90eb63416ede8263eab67e466c718c51cd1a77a;

/**
 * CampaignAiFeedbackWebhookContent
 *
 * Event content.
 */
final class CampaignAiFeedbackWebhookContent extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Unique identifier of the AI review request, matching the requestUuid returned when the campaign was submitted for AI review.
     * Format: uuid
     */
    public string $aiCampaignFeedbackRequestUuid;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'aiCampaignFeedbackRequestUuid' => is_string($value) ? $this->aiCampaignFeedbackRequestUuid = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
