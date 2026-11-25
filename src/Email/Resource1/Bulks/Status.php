<?php

declare(strict_types=1);

namespace InfobipSDK\Email\Resource1\Bulks;

final class Status extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** GET /email/1/bulks/status [operationId: get-scheduled-email-statuses] */
    /**
     * Get scheduled bulk statuses
     *
     * See the status of scheduled email messages.
     */
    public static function get(\InfobipSDK\GetParams\Email\Resource1\Bulks\Status $params): \InfobipSDK\DTOs\N34438aa163eb13a2a06ad96ae98170e41cc2ee8902e8b7655aba73ceb0bb23f1\BulkStatusResponse
    {
        return self::client()->resource(\InfobipSDK\Resources\Email\Resource1\Bulks\Status::class)->get($params);
    }

    /** PUT /email/1/bulks/status [operationId: update-scheduled-email-statuses] */
    /**
     * Update scheduled message statuses
     *
     * Change status or completely cancel sending of scheduled messages.
     */
    public static function put(\InfobipSDK\PutParams\Email\Resource1\Bulks\Status $params): \InfobipSDK\DTOs\N34438aa163eb13a2a06ad96ae98170e41cc2ee8902e8b7655aba73ceb0bb23f1\BulkUpdateStatusResponse
    {
        return self::client()->resource(\InfobipSDK\Resources\Email\Resource1\Bulks\Status::class)->put($params);
    }
}
