<?php

declare(strict_types=1);

namespace InfobipSDK\Zalo\Resource1;

final class Logs extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** GET /zalo/1/logs [operationId: get-zalo-logs] */
    /**
     * Get Zalo logs
     *
     * You should use this method for displaying logs in the user interface or for some other less frequent usage.
     */
    public static function get(?\InfobipSDK\GetParams\Zalo\Resource1\Logs $params = null): \InfobipSDK\DTOs\N6a8bbdacebad88e7e0de8bdfd30e29e04d114b9f00175a0482b9e26b742d85d5\LogsResponse
    {
        return self::client()->resource(\InfobipSDK\Resources\Zalo\Resource1\Logs::class)->get($params);
    }
}
