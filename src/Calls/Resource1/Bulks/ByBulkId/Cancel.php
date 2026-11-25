<?php

declare(strict_types=1);

namespace InfobipSDK\Calls\Resource1\Bulks\ByBulkId;

final class Cancel extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** POST /calls/1/bulks/{bulkId}/cancel [operationId: cancel-bulk] */
    /**
     * Cancel
     *
     * Cancel a bulk. Bulk can be cancelled if it was created with scheduling options and has not finished yet.
     */
    public static function post(string $bulkId): \InfobipSDK\DTOs\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\BulkStatus
    {
        return self::client()->resource(\InfobipSDK\Resources\Calls\Resource1\Bulks\ByBulkId\Cancel::class)->post($bulkId);
    }
}
