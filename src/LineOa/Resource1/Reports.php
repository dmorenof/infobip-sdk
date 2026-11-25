<?php

declare(strict_types=1);

namespace InfobipSDK\LineOa\Resource1;

final class Reports extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** GET /line-oa/1/reports [operationId: get-outbound-line-oa-message-delivery-reports] */
    /**
     * Get LINE Official Account delivery reports
     *
     * Pull the latest delivery reports when real-time webhooks are unavailable. Each report is returned only once.
     * Documentation: https://www.infobip.com/docs/line
     */
    public static function get(?\InfobipSDK\GetParams\LineOa\Resource1\Reports $params = null): \InfobipSDK\DTOs\N53932f53b54839fd583eae39fe878805e79c364296f164379eb97a5f2c4b6c59\DeliveryReports
    {
        return self::client()->resource(\InfobipSDK\Resources\LineOa\Resource1\Reports::class)->get($params);
    }

}
