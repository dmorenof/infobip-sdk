<?php

declare(strict_types=1);

namespace InfobipSDK\Messenger\Resource1;

final class Reports extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** GET /messenger/1/reports [operationId: get-outbound-messenger-message-delivery-reports] */
    /**
     * Get Messenger delivery reports
     *
     * If you are unable to receive real-time delivery reports towards your endpoint for various reasons, we offer you an API method to fetch batches of delivery reports to confirm whether specific messages have been delivered. Each request towards this endpoint will return batches of the latest delivery reports. Please note they will be returned only once.
     * Documentation: https://www.infobip.com/docs/facebook-messenger
     */
    public static function get(?\InfobipSDK\GetParams\Messenger\Resource1\Reports $params = null): \InfobipSDK\DTOs\N747c7e4c0b03b254cdcbef02225bbd858a3bba6d956caa5ac2689fea92b213b0\DeliveryReports
    {
        return self::client()->resource(\InfobipSDK\Resources\Messenger\Resource1\Reports::class)->get($params);
    }
}
