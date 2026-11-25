<?php

declare(strict_types=1);

namespace InfobipSDK\NumberActivationState\Resource1;

final class NetworkReports extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** GET /number-activation-state/1/network-reports [operationId: get-reports-metadata] */
    /**
     * Get Network Reports metadata
     *
     * Get a paginated list of Network Reports metadata.
     */
    public static function get(?\InfobipSDK\GetParams\NumberActivationState\Resource1\NetworkReports $params = null): \InfobipSDK\DTOs\N8018948352e80bbff88731d9fb43f611b84a58f2b44c304c63a8e4ae9c4bd661\PageReportMetadata
    {
        return self::client()->resource(\InfobipSDK\Resources\NumberActivationState\Resource1\NetworkReports::class)->get($params);
    }
}
