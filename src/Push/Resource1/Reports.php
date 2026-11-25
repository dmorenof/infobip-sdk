<?php

declare(strict_types=1);

namespace InfobipSDK\Push\Resource1;

final class Reports extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** GET /push/1/reports [operationId: get-push-reports] */
    /**
     * Get Push reports
     *
     * This method allows you to get one-time delivery reports for sent Push messages. You can only fetch reports that are no older than 48 hours.
     */
    public static function get(?\InfobipSDK\GetParams\Push\Resource1\Reports $params = null): \InfobipSDK\DTOs\Fccfa6f52b47dd30d36e2c1fad9bb5d494251b453352b21aeb7a407c6f1eeb5c\ApiReportsResponse
    {
        return self::client()->resource(\InfobipSDK\Resources\Push\Resource1\Reports::class)->get($params);
    }
}
