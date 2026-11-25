<?php

declare(strict_types=1);

namespace InfobipSDK\Messenger\Resource1;

final class Logs extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** GET /messenger/1/logs [operationId: get-outbound-messenger-message-logs] */
    /**
     * Get outbound Messenger message logs
     *
     * Use this method for displaying logs for example in the user interface. Available are the logs for the last 48 hours.
     */
    public static function get(?\InfobipSDK\GetParams\Messenger\Resource1\Logs $params = null): \InfobipSDK\DTOs\N747c7e4c0b03b254cdcbef02225bbd858a3bba6d956caa5ac2689fea92b213b0\LogResponseLogFacebookOutboundContent
    {
        return self::client()->resource(\InfobipSDK\Resources\Messenger\Resource1\Logs::class)->get($params);
    }

}
