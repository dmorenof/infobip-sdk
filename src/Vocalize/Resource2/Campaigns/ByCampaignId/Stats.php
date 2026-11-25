<?php

declare(strict_types=1);

namespace InfobipSDK\Vocalize\Resource2\Campaigns\ByCampaignId;

final class Stats extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** GET /vocalize/2/campaigns/{campaignId}/stats [operationId: vocalize-get-campaign-stats] */
    /**
     * Get campaign statistics
     *
     * Get statistics for a campaign, including total scores, attempts, and more.
     */
    public static function get(string $campaignId): \InfobipSDK\DTOs\N1e177a7c00f43fb0cfaf8876573312572061d384022066ddec32b06770199719\CampaignStatsResponse
    {
        return self::client()->resource(\InfobipSDK\Resources\Vocalize\Resource2\Campaigns\ByCampaignId\Stats::class)->get($campaignId);
    }
}
