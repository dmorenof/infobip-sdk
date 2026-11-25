<?php

declare(strict_types=1);

namespace InfobipSDK\MessagesApi\Resource1;

final class Reports extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** GET /messages-api/1/reports [operationId: get-messages-api-delivery-reports] */
    /**
     * Get delivery reports
     *
     * If you are unable to receive real-time delivery reports towards your endpoint for various reasons, we offer you an API method to fetch batches of delivery reports to confirm whether specific messages have been delivered. Each request towards this endpoint will return batches of the latest delivery reports. This endpoint retrieves delivery reports for messages sent through Messages API as well as messages sent using channel-specific standalone APIs (for example, Viber, API, WhatsApp API, or SMS API). Please note they will be returned only once.
     * Documentation: https://www.infobip.com/docs/messages-api
     */
    public static function get(?\InfobipSDK\GetParams\MessagesApi\Resource1\Reports $params = null): \InfobipSDK\DTOs\N899caf445aab842b03fe1d74e4afd7097f0161dae66538ffa05bba2f153d708f\MessagesApiDeliveryReportResponse
    {
        return self::client()->resource(\InfobipSDK\Resources\MessagesApi\Resource1\Reports::class)->get($params);
    }
}
