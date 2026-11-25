<?php

declare(strict_types=1);

namespace InfobipSDK\Instagram\Resource1;

final class Reports extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** GET /instagram/1/reports [operationId: get-outbound-instagram-message-delivery-reports] */
    /**
     * Get Instagram delivery reports
     *
     * If you are unable to receive real-time delivery reports towards your endpoint for various reasons, we offer you an API method to fetch batches of delivery reports to confirm whether specific messages have been delivered. Each request towards this endpoint will return batches of the latest delivery reports. Please note they will be returned only once.
     * Documentation: https://www.infobip.com/docs/instagram
     */
    public static function get(?\InfobipSDK\GetParams\Instagram\Resource1\Reports $params = null): \InfobipSDK\DTOs\N8bb20f43a591755a249613f66cc72e7e0fcc9b313d81a59f9ca0e0ff261ac181\DeliveryReports
    {
        return self::client()->resource(\InfobipSDK\Resources\Instagram\Resource1\Reports::class)->get($params);
    }
}
