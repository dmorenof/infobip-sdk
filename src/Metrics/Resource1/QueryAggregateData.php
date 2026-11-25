<?php

declare(strict_types=1);

namespace InfobipSDK\Metrics\Resource1;

final class QueryAggregateData extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** POST /metrics/1/query-aggregate-data [operationId: query-aggregate-data] */
    /**
     * Query aggregated traffic data
     *
     * Start process for traffic data aggregation. The result will be posted to `callbackURL` provided in the request. The response format is described in [Receive aggregated data result](#platform/metrics-api/receive-aggregate-data-result) operation.
     */
    public static function post(\InfobipSDK\DTOs\N99c561addf74bb07fd67942658f68818323ce564cc5eef645d487517ca1425f2\QueryAggregateDataRequest $payload): \InfobipSDK\DTOs\N99c561addf74bb07fd67942658f68818323ce564cc5eef645d487517ca1425f2\QueryAggregateDataResponse
    {
        return self::client()->resource(\InfobipSDK\Resources\Metrics\Resource1\QueryAggregateData::class)->post($payload);
    }

}
