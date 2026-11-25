<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N2700ea5ecfd0574f21019319e90eb63416ede8263eab67e466c718c51cd1a77a;

/**
 * CampaignAiBuilderWebhookContent
 *
 * Event content.
 */
final class CampaignAiBuilderWebhookContent extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Unique identifier of the AI campaign builder request, matching the requestUuid returned when the campaign builder was started.
     * Format: uuid
     */
    public string $aiCampaignBuilderRequestUuid;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'aiCampaignBuilderRequestUuid' => is_string($value) ? $this->aiCampaignBuilderRequestUuid = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
