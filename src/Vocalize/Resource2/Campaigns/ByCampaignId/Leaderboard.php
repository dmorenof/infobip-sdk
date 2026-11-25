<?php

declare(strict_types=1);

namespace InfobipSDK\Vocalize\Resource2\Campaigns\ByCampaignId;

final class Leaderboard extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** GET /vocalize/2/campaigns/{campaignId}/leaderboard [operationId: vocalize-get-campaign-leaderboard] */
    /**
     * Get campaign leaderboard
     *
     * Get leaderboard for a campaign, sorted by score. Additional query parameters can be used to filter and paginate the results. Filter by fromTime and toTime to get scores within a specific time range. Filter by day to get scores for a specific day of the campaign. You cannot use both fromTime/toTime and day together. If no filters are provided, the leaderboard will show all scores for the campaign, paginated. Users who have not provided their name will not be included in the leaderboard.
     */
    public static function get(string $campaignId, ?\InfobipSDK\GetParams\Vocalize\Resource2\Campaigns\ByCampaignId\Leaderboard $params = null): \InfobipSDK\DTOs\N1e177a7c00f43fb0cfaf8876573312572061d384022066ddec32b06770199719\LeaderboardResponse
    {
        return self::client()->resource(\InfobipSDK\Resources\Vocalize\Resource2\Campaigns\ByCampaignId\Leaderboard::class)->get($campaignId, $params);
    }
}
