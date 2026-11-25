<?php

declare(strict_types=1);

namespace InfobipSDK\Viber\Resource2;

final class Reports extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** GET /viber/2/reports [operationId: get-outbound-viber-message-delivery-reports] */
    /**
     * Get Viber delivery reports
     *
     * If you are unable to receive real-time delivery reports towards your endpoint for various reasons, we offer you an API method to fetch batches of delivery reports to confirm whether specific messages have been delivered. Each request towards this endpoint will return batches of the latest delivery reports. Please note they will be returned only once.
     * Documentation: https://www.infobip.com/docs/viber
     */
    public static function get(?\InfobipSDK\GetParams\Viber\Resource2\Reports $params = null): \InfobipSDK\DTOs\N9389c24e0e9ed01ee6b8f8356a2a69457800d0649274de6f0e7a1954857d6488\DeliveryReports
    {
        return self::client()->resource(\InfobipSDK\Resources\Viber\Resource2\Reports::class)->get($params);
    }
}
