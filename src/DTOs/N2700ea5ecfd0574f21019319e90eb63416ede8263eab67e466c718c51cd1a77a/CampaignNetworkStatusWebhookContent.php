<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N2700ea5ecfd0574f21019319e90eb63416ede8263eab67e466c718c51cd1a77a;

/**
 * CampaignNetworkStatusWebhookContent
 *
 * Event content.
 */
final class CampaignNetworkStatusWebhookContent extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * The ID of campaign.
     * Example: "38a1c2c6-55f2-11ee-a061-325096b39f47"
     * Format: uuid
     */
    public string $campaignId;
    public \InfobipSDK\Enums\N2700ea5ecfd0574f21019319e90eb63416ede8263eab67e466c718c51cd1a77a\CampaignRegistrar $campaignNetwork;
    public \InfobipSDK\Enums\N2700ea5ecfd0574f21019319e90eb63416ede8263eab67e466c718c51cd1a77a\WebhookCampaignNetworkStatus $campaignNetworkStatus;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'campaignId' => is_string($value) ? $this->campaignId = $value : parent::assignMember($name, $value),
            'campaignNetwork' => is_string($value) ? $this->campaignNetwork = \InfobipSDK\Enums\N2700ea5ecfd0574f21019319e90eb63416ede8263eab67e466c718c51cd1a77a\CampaignRegistrar::from($value) : parent::assignMember($name, $value),
            'campaignNetworkStatus' => is_string($value) ? $this->campaignNetworkStatus = \InfobipSDK\Enums\N2700ea5ecfd0574f21019319e90eb63416ede8263eab67e466c718c51cd1a77a\WebhookCampaignNetworkStatus::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
