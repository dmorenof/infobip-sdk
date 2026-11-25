<?php

declare(strict_types=1);

namespace InfobipSDK\Audit\Resource1;

final class Logs extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** GET /audit/1/logs [operationId: search-audit-logs] */
    /**
     * Search Audit Logs
     *
     * This method allows you to track and search through users' activities on the web interface.
     */
    public static function get(?\InfobipSDK\GetParams\Audit\Resource1\Logs $params = null): \InfobipSDK\Collections\Audit\Resource1\Logs\Get\Resource1LogsCollection
    {
        return self::client()->resource(\InfobipSDK\Resources\Audit\Resource1\Logs::class)->get($params);
    }
}
