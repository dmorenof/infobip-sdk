<?php

declare(strict_types=1);

namespace InfobipSDK\Push\Resource3;

final class Reports extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** GET /push/3/reports [operationId: get-outbound-push-message-delivery-reports] */
    /**
     * Get Push delivery reports
     *
     * If you are unable to receive real-time delivery reports towards your endpoint for various reasons, we offer you an API method to fetch batches of delivery reports to confirm whether specific messages have been delivered. Each request towards this endpoint will return batches of the latest delivery reports. Please note they will be returned only once.
     * Documentation: https://www.infobip.com/docs/mobile-push
     */
    public static function get(?\InfobipSDK\GetParams\Push\Resource3\Reports $params = null): \InfobipSDK\DTOs\Be899aa87631e28acaf5aa6d4ae5df630595a5bf087810b506602819a5d8b742\DeliveryReports
    {
        return self::client()->resource(\InfobipSDK\Resources\Push\Resource3\Reports::class)->get($params);
    }
}
