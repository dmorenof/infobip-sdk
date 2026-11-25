<?php

declare(strict_types=1);

namespace InfobipSDK\Push\Resource1;

final class Statistics extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** GET /push/1/statistics [operationId: get-push-statistics] */
    /**
     * Get Push statistics
     *
     * The following method allows you to retrieve statistics for a specific bulk of sent Push messages.
     */
    public static function get(\InfobipSDK\GetParams\Push\Resource1\Statistics $params): \InfobipSDK\DTOs\A381f86553e288851808282b347a5f8bd7ba34b9b6feb33f5946feb4892476be\StatisticsResponse
    {
        return self::client()->resource(\InfobipSDK\Resources\Push\Resource1\Statistics::class)->get($params);
    }
}
