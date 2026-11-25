<?php

declare(strict_types=1);

namespace InfobipSDK\Instagram\Resource1;

final class Logs extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** GET /instagram/1/logs [operationId: get-outbound-instagram-message-logs] */
    /**
     * Get outbound Instagram message logs
     *
     * Use this method for displaying logs for example in the user interface. Available are the logs for the last 48 hours.
     */
    public static function get(?\InfobipSDK\GetParams\Instagram\Resource1\Logs $params = null): \InfobipSDK\DTOs\N8bb20f43a591755a249613f66cc72e7e0fcc9b313d81a59f9ca0e0ff261ac181\LogResponseLogInstagramDmOutboundContent
    {
        return self::client()->resource(\InfobipSDK\Resources\Instagram\Resource1\Logs::class)->get($params);
    }
}
