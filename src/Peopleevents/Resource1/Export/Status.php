<?php

declare(strict_types=1);

namespace InfobipSDK\Peopleevents\Resource1\Export;

final class Status extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** GET /peopleevents/1/export/status/{requestId} [operationId: get-events-export-request-status] */
    /**
     * Check status of event export request
     *
     * Retrieves the status of a previously submitted data export request by the request ID.
     */
    public static function getByRequestId(string $requestId): \InfobipSDK\DTOs\A389f65d9a8b852c007cdb5a24c983f5c2dc5fa67bb655d3284926dc5c3ce095\StatusResponseBody
    {
        return self::client()->resource(\InfobipSDK\Resources\Peopleevents\Resource1\Export\Status::class)->getByRequestId($requestId);
    }
}
