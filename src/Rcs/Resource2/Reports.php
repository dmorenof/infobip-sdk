<?php

declare(strict_types=1);

namespace InfobipSDK\Rcs\Resource2;

final class Reports extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** GET /rcs/2/reports [operationId: get-outbound-rcs-message-delivery-reports] */
    /**
     * Get RCS delivery reports
     *
     * If you are unable to receive real-time delivery reports towards your endpoint for various reasons, we offer you an API method to fetch batches of delivery reports to confirm whether specific messages have been delivered. Each request towards this endpoint will return batches of the latest delivery reports. Please note they will be returned only once.
     * Documentation: https://www.infobip.com/docs/rcs
     */
    public static function get(?\InfobipSDK\GetParams\Rcs\Resource2\Reports $params = null): \InfobipSDK\DTOs\B839d8c276f6f1ef62ce2dce758ba402953b31f455d6d08549a7147d79f50d62\DeliveryReports
    {
        return self::client()->resource(\InfobipSDK\Resources\Rcs\Resource2\Reports::class)->get($params);
    }
}
