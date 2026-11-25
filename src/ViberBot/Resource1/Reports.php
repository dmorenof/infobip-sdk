<?php

declare(strict_types=1);

namespace InfobipSDK\ViberBot\Resource1;

final class Reports extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** GET /viber-bot/1/reports [operationId: get-outbound-viber-bot-message-delivery-reports] */
    /**
     * Get Viber Bot delivery reports
     *
     * If you are unable to receive real-time delivery reports towards your endpoint for various reasons, we offer you an API method to fetch batches of delivery reports to confirm whether specific messages have been delivered. Each request towards this endpoint will return batches of the latest delivery reports. Please note they will be returned only once.
     * Documentation: https://www.infobip.com/docs/viber
     */
    public static function get(?\InfobipSDK\GetParams\ViberBot\Resource1\Reports $params = null): \InfobipSDK\DTOs\N14dcd0f25fe0ff2584924b9f91668496573ab31a7e8cac75f9f81e79874514cb\DeliveryReports
    {
        return self::client()->resource(\InfobipSDK\Resources\ViberBot\Resource1\Reports::class)->get($params);
    }

}
