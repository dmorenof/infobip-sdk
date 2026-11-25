<?php

declare(strict_types=1);

namespace InfobipSDK\Tiktok\Resource1;

final class Reports extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** GET /tiktok/1/reports [operationId: get-outbound-tiktok-message-delivery-reports] */
    /**
     * Get TikTok delivery reports
     *
     * Use this endpoint to pull delivery reports when your endpoint does not receive real-time delivery reports. Each request returns the latest batch of delivery reports from the last 48 hours. Each report is returned only once.
     * Documentation: https://www.infobip.com/docs/tiktok
     */
    public static function get(?\InfobipSDK\GetParams\Tiktok\Resource1\Reports $params = null): \InfobipSDK\DTOs\E2cbdd2d36d35e3e9c85bc5344135c1a087d73d9cf6c9dc8cf1c258211186c7c\DeliveryReports
    {
        return self::client()->resource(\InfobipSDK\Resources\Tiktok\Resource1\Reports::class)->get($params);
    }

}
