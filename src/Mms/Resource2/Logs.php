<?php

declare(strict_types=1);

namespace InfobipSDK\Mms\Resource2;

final class Logs extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** GET /mms/2/logs [operationId: get-outbound-mms-message-logs] */
    /**
     * Get MMS message logs
     *
     * Use this method for displaying logs for example in the user interface. Available are the logs for the last 48 hours.
     */
    public static function get(?\InfobipSDK\GetParams\Mms\Resource2\Logs $params = null): \InfobipSDK\DTOs\Faad2f34157fead7bc36bdf18ea6d8be6674c0ceb93de05135894a2bf0f2aa1b\LogResponseMmsUnificationLogMmsOutboundContent
    {
        return self::client()->resource(\InfobipSDK\Resources\Mms\Resource2\Logs::class)->get($params);
    }
}
