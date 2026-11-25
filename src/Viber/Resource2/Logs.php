<?php

declare(strict_types=1);

namespace InfobipSDK\Viber\Resource2;

final class Logs extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** GET /viber/2/logs [operationId: get-outbound-viber-message-logs] */
    /**
     * Get Viber message logs
     *
     * Use this method for displaying logs for example in the user interface. Available are the logs for the last 48 hours.
     */
    public static function get(?\InfobipSDK\GetParams\Viber\Resource2\Logs $params = null): \InfobipSDK\DTOs\N9389c24e0e9ed01ee6b8f8356a2a69457800d0649274de6f0e7a1954857d6488\LogResponseLogViberOutboundContent
    {
        return self::client()->resource(\InfobipSDK\Resources\Viber\Resource2\Logs::class)->get($params);
    }

}
