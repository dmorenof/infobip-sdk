<?php

declare(strict_types=1);

namespace InfobipSDK\Metrics\Resource1;

final class Requests extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** GET /metrics/1/requests/{requestId} [operationId: get-aggregate-request-status] */
    /**
     * Get status of query aggregate data request
     *
     * Return the status of ongoing request, started by invoking [Query aggregated traffic data](#platform/metrics-api/query-aggregate-data).
     */
    public static function getByRequestId(string $requestId): \InfobipSDK\DTOs\N99c561addf74bb07fd67942658f68818323ce564cc5eef645d487517ca1425f2\RequestInfo
    {
        return self::client()->resource(\InfobipSDK\Resources\Metrics\Resource1\Requests::class)->getByRequestId($requestId);
    }

}
