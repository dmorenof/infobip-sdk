<?php

declare(strict_types=1);

namespace InfobipSDK\Billing\Resource1\Usage;

final class Requests extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** GET /billing/1/usage/requests/{requestId} [operationId: get-billing-usage-request-status] */
    /**
     * Get status of query billing usage request
     *
     * Return the status of ongoing request, started by invoking [Query billing usage data](#platform/billing-usage-api/query-billing-usage).
     */
    public static function getByRequestId(string $requestId): \InfobipSDK\DTOs\N99c561addf74bb07fd67942658f68818323ce564cc5eef645d487517ca1425f2\RequestInfo
    {
        return self::client()->resource(\InfobipSDK\Resources\Billing\Resource1\Usage\Requests::class)->getByRequestId($requestId);
    }
}
