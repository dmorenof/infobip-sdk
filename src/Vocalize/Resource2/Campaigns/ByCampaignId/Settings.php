<?php

declare(strict_types=1);

namespace InfobipSDK\Vocalize\Resource2\Campaigns\ByCampaignId;

final class Settings extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** PATCH /vocalize/2/campaigns/{campaignId}/settings [operationId: vocalize-update-campaign-settings] */
    /**
     * Update campaign settings
     *
     * Update the settings of a campaign with the specified ID.
     */
    public static function patch(string $campaignId, \InfobipSDK\DTOs\N1e177a7c00f43fb0cfaf8876573312572061d384022066ddec32b06770199719\CampaignSettings $payload): \InfobipSDK\DTOs\N1e177a7c00f43fb0cfaf8876573312572061d384022066ddec32b06770199719\CampaignResponse
    {
        return self::client()->resource(\InfobipSDK\Resources\Vocalize\Resource2\Campaigns\ByCampaignId\Settings::class)->patch($campaignId, $payload);
    }

}
