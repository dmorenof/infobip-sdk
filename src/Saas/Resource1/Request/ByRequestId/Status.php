<?php

declare(strict_types=1);

namespace InfobipSDK\Saas\Resource1\Request\ByRequestId;

final class Status extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** GET /saas/1/request/{requestId}/status [operationId: saas-request-status] */
    /**
     * Get SaaS request status
     *
     * Get the status of your share request.
     */
    public static function get(string $requestId): \InfobipSDK\DTOs\F92ed732784664dca5efb3669b03438e69cca5f33f4420f5b4996e58aa137657\RequestStatusResponse
    {
        return self::client()->resource(\InfobipSDK\Resources\Saas\Resource1\Request\ByRequestId\Status::class)->get($requestId);
    }

}
