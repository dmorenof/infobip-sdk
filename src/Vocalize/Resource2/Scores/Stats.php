<?php

declare(strict_types=1);

namespace InfobipSDK\Vocalize\Resource2\Scores;

final class Stats extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** GET /vocalize/2/scores/stats [operationId: vocalize-get-score-stats] */
    /**
     * Get user score statistics
     *
     * This endpoint retrieves score statistics for a specific user in a campaign.
     */
    public static function get(\InfobipSDK\GetParams\Vocalize\Resource2\Scores\Stats $params): \InfobipSDK\DTOs\N1e177a7c00f43fb0cfaf8876573312572061d384022066ddec32b06770199719\ScoreStatsResponse
    {
        return self::client()->resource(\InfobipSDK\Resources\Vocalize\Resource2\Scores\Stats::class)->get($params);
    }

}
