<?php

declare(strict_types=1);

namespace InfobipSDK\Calls\Resource1;

final class Bulks extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** POST /calls/1/bulks [operationId: create-bulk] */
    /**
     * Create bulk of calls
     *
     * Create a bulk of outbound calls. Currently, only `PHONE` endpoints are supported.
     * When retry options are specified, bulk calls are retried if they meet internal or client retry criteria.
     * Client retry criteria are met when call reaches the end device and fails. Internal retry criteria are met when call fails before reaching the end device.
     */
    public static function post(\InfobipSDK\DTOs\N2f1f086f3fbc952749e03dadc7759cfc932ca2898a0c5e5b77a8bc2d84bd5c48\BulkRequest $payload): \InfobipSDK\DTOs\N2f1f086f3fbc952749e03dadc7759cfc932ca2898a0c5e5b77a8bc2d84bd5c48\BulkResponse
    {
        return self::client()->resource(\InfobipSDK\Resources\Calls\Resource1\Bulks::class)->post($payload);
    }

    /** GET /calls/1/bulks/{bulkId} [operationId: get-bulk-status] */
    /**
     * Get bulk status
     *
     * Get a single bulk status. Bulk has a status if it was created with scheduling options.
     */
    public static function getByBulkId(string $bulkId): \InfobipSDK\DTOs\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\BulkStatus
    {
        return self::client()->resource(\InfobipSDK\Resources\Calls\Resource1\Bulks::class)->getByBulkId($bulkId);
    }

}
