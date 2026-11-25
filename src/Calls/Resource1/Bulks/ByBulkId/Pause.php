<?php

declare(strict_types=1);

namespace InfobipSDK\Calls\Resource1\Bulks\ByBulkId;

final class Pause extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** POST /calls/1/bulks/{bulkId}/pause [operationId: pause-bulk] */
    /**
     * Pause
     *
     * Pause a bulk. Bulk can be paused if it is in progress and was created with scheduling options.
     */
    public static function post(string $bulkId): \InfobipSDK\DTOs\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\BulkStatus
    {
        return self::client()->resource(\InfobipSDK\Resources\Calls\Resource1\Bulks\ByBulkId\Pause::class)->post($bulkId);
    }
}
