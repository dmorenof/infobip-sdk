<?php

declare(strict_types=1);

namespace InfobipSDK\Push\Resource3;

final class Logs extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** GET /push/3/logs [operationId: get-outbound-push-message-logs] */
    /**
     * Get Push message logs
     *
     * Use this method for displaying logs for example in the user interface. Available are the logs for the last 48 hours.
     */
    public static function get(?\InfobipSDK\GetParams\Push\Resource3\Logs $params = null): \InfobipSDK\DTOs\Be899aa87631e28acaf5aa6d4ae5df630595a5bf087810b506602819a5d8b742\LogResponseLogPushOutboundContent
    {
        return self::client()->resource(\InfobipSDK\Resources\Push\Resource3\Logs::class)->get($params);
    }

}
