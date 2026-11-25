<?php

declare(strict_types=1);

namespace InfobipSDK\Line\Resource1;

final class Reports extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** GET /line/1/reports [operationId: get-outbound-line-message-delivery-reports] */
    /**
     * Get LON delivery reports
     *
     * If you are unable to receive real-time delivery reports towards your endpoint for various reasons, we offer you an API method to fetch batches of delivery reports to confirm whether specific messages have been delivered. Each request towards this endpoint will return batches of the latest delivery reports. Please note they will be returned only once.
     * Documentation: https://www.infobip.com/docs/line
     */
    public static function get(?\InfobipSDK\GetParams\Line\Resource1\Reports $params = null): \InfobipSDK\DTOs\N267b6ecf9b18ace076c5287f2f55ab493690ff43a19cc6531a331c0c908f8fd5\DeliveryReports
    {
        return self::client()->resource(\InfobipSDK\Resources\Line\Resource1\Reports::class)->get($params);
    }

}
