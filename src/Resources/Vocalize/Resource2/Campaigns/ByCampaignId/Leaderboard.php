<?php

declare(strict_types=1);

namespace InfobipSDK\Resources\Vocalize\Resource2\Campaigns\ByCampaignId;

final class Leaderboard extends \InfobipSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/vocalize/2/campaigns/{campaignId}/leaderboard',
        'security' => [
            [
                'APIKeyHeader' => [],
            ],
        ],
        'errors' => [
            400 => '\\InfobipSDK\\DTOs\\N1e177a7c00f43fb0cfaf8876573312572061d384022066ddec32b06770199719\\APIError400',
            401 => '\\InfobipSDK\\DTOs\\Api\\Error',
            403 => '\\InfobipSDK\\DTOs\\Api\\Error',
            404 => '\\InfobipSDK\\DTOs\\N1e177a7c00f43fb0cfaf8876573312572061d384022066ddec32b06770199719\\APIError404',
            429 => '\\InfobipSDK\\DTOs\\Api\\Error',
            500 => '\\InfobipSDK\\DTOs\\Api\\Error',
        ],
        'errorResponses' => [
            400 => [
                'type' => '\\InfobipSDK\\DTOs\\N1e177a7c00f43fb0cfaf8876573312572061d384022066ddec32b06770199719\\APIError400',
                'schemaNullable' => false,
            ],
            401 => [
                'type' => '\\InfobipSDK\\DTOs\\Api\\Error',
                'schemaNullable' => false,
            ],
            403 => [
                'type' => '\\InfobipSDK\\DTOs\\Api\\Error',
                'schemaNullable' => false,
            ],
            404 => [
                'type' => '\\InfobipSDK\\DTOs\\N1e177a7c00f43fb0cfaf8876573312572061d384022066ddec32b06770199719\\APIError404',
                'schemaNullable' => false,
            ],
            429 => [
                'type' => '\\InfobipSDK\\DTOs\\Api\\Error',
                'schemaNullable' => false,
            ],
            500 => [
                'type' => '\\InfobipSDK\\DTOs\\Api\\Error',
                'schemaNullable' => false,
            ],
        ],
        'responseType' => '\\InfobipSDK\\DTOs\\N1e177a7c00f43fb0cfaf8876573312572061d384022066ddec32b06770199719\\LeaderboardResponse',
    ];

    /**
     * Get campaign leaderboard
     *
     * Get leaderboard for a campaign, sorted by score. Additional query parameters can be used to filter and paginate the results. Filter by fromTime and toTime to get scores within a specific time range. Filter by day to get scores for a specific day of the campaign. You cannot use both fromTime/toTime and day together. If no filters are provided, the leaderboard will show all scores for the campaign, paginated. Users who have not provided their name will not be included in the leaderboard.
     */
    public function get(string $campaignId, ?\InfobipSDK\GetParams\Vocalize\Resource2\Campaigns\ByCampaignId\Leaderboard $params = null): \InfobipSDK\DTOs\N1e177a7c00f43fb0cfaf8876573312572061d384022066ddec32b06770199719\LeaderboardResponse
    {
        /** @var \InfobipSDK\DTOs\N1e177a7c00f43fb0cfaf8876573312572061d384022066ddec32b06770199719\LeaderboardResponse $result */
        $result = $this->executeArguments(self::operation(self::GET), path: ['campaignId' => $campaignId], parameters: $params);
        return $result;
    }
}
