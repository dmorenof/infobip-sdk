<?php

declare(strict_types=1);

namespace InfobipSDK\Rcs\Resource2;

final class Logs extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** GET /rcs/2/logs [operationId: get-outbound-rcs-message-logs] */
    /**
     * Get RCS message logs
     *
     * Use this method for displaying logs for example in the user interface. Available are the logs for the last 48 hours.
     */
    public static function get(?\InfobipSDK\GetParams\Rcs\Resource2\Logs $params = null): \InfobipSDK\DTOs\B839d8c276f6f1ef62ce2dce758ba402953b31f455d6d08549a7147d79f50d62\LogResponseLogRcsOutboundMessageContent
    {
        return self::client()->resource(\InfobipSDK\Resources\Rcs\Resource2\Logs::class)->get($params);
    }

}
