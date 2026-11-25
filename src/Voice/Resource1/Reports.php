<?php

declare(strict_types=1);

namespace InfobipSDK\Voice\Resource1;

final class Reports extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** GET /voice/1/reports [operationId: get-voice-delivery-reports] */
    /**
     * Get Voice Delivery Reports
     *
     * This method allows you to get delivery reports for sent Voice messages, outbound IVR or Click-to-call (without notifyUrl request parameter). Delivery reports are returned only once. Additional delivery report request will return an empty collection.
     */
    public static function get(?\InfobipSDK\GetParams\Voice\Resource1\Reports $params = null): \InfobipSDK\DTOs\N13d6cf838c63455fe28fcf6ab1b4447c03d816f87ce89525d3cd759ca08a7b1a\ReportResponse
    {
        return self::client()->resource(\InfobipSDK\Resources\Voice\Resource1\Reports::class)->get($params);
    }

}
