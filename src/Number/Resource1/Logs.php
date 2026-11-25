<?php

declare(strict_types=1);

namespace InfobipSDK\Number\Resource1;

final class Logs extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** GET /number/1/logs [operationId: get-number-context-logs] */
    /**
     * Get Number Context logs
     *
     * This method allows you to get logs of sent Number Context requests.
     */
    public static function get(?\InfobipSDK\GetParams\Number\Resource1\Logs $params = null): \InfobipSDK\DTOs\N4033c81feb806caaa02f9cef553f79f0137a7aaa85d200d9d5e6449874c43c3d\NcLogResponse
    {
        return self::client()->resource(\InfobipSDK\Resources\Number\Resource1\Logs::class)->get($params);
    }
}
