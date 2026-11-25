<?php

declare(strict_types=1);

namespace InfobipSDK\AppleMfb\Resource1;

final class Reports extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** GET /apple-mfb/1/reports [operationId: get-outbound-apple-mfb-message-delivery-reports] */
    /**
     * Get Apple Messages for Business delivery reports
     *
     * If you are unable to receive real-time delivery reports towards your endpoint for various reasons, we offer you an API method to fetch batches of delivery reports to confirm whether specific messages have been delivered. Each request towards this endpoint will return batches of the latest delivery reports. Please note they will be returned only once.
     * Documentation: https://www.infobip.com/docs/apple-messages-for-business
     */
    public static function get(?\InfobipSDK\GetParams\AppleMfb\Resource1\Reports $params = null): \InfobipSDK\DTOs\N91c858d6e55640d2b6750e23f7ec3df534ca8bee928e5f9b25341eaf73842f14\DeliveryReports
    {
        return self::client()->resource(\InfobipSDK\Resources\AppleMfb\Resource1\Reports::class)->get($params);
    }

}
