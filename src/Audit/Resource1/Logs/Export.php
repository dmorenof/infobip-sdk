<?php

declare(strict_types=1);

namespace InfobipSDK\Audit\Resource1\Logs;

final class Export extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** GET /audit/1/logs/export [operationId: export-audit-logs] */
    /**
     * Export Audit Logs
     *
     * This method allows you to search and export users' activities on the web interface.
     */
    public static function get(?\InfobipSDK\GetParams\Audit\Resource1\Logs\Export $params = null): string
    {
        return self::client()->resource(\InfobipSDK\Resources\Audit\Resource1\Logs\Export::class)->get($params);
    }
}
