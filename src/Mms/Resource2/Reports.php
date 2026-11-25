<?php

declare(strict_types=1);

namespace InfobipSDK\Mms\Resource2;

final class Reports extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** GET /mms/2/reports [operationId: get-outbound-mms-message-delivery-reports] */
    /**
     * Get MMS delivery reports
     *
     * If you are unable to receive real-time delivery reports towards your endpoint for various reasons, we offer you an API method to fetch batches of delivery reports to confirm whether specific messages have been delivered. Each request towards this endpoint will return batches of the latest delivery reports. Please note they will be returned only once.
     * Documentation: https://www.infobip.com/docs/mms
     */
    public static function get(?\InfobipSDK\GetParams\Mms\Resource2\Reports $params = null): \InfobipSDK\DTOs\Faad2f34157fead7bc36bdf18ea6d8be6674c0ceb93de05135894a2bf0f2aa1b\DeliveryReports
    {
        return self::client()->resource(\InfobipSDK\Resources\Mms\Resource2\Reports::class)->get($params);
    }
}
