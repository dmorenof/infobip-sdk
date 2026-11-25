<?php

declare(strict_types=1);

namespace InfobipSDK\Email\Resource1;

final class Bulks extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** GET /email/1/bulks [operationId: get-scheduled-emails] */
    /**
     * Get scheduled bulks
     *
     * See the scheduled time of your Email messages.
     */
    public static function get(\InfobipSDK\GetParams\Email\Resource1\Bulks $params): \InfobipSDK\DTOs\N34438aa163eb13a2a06ad96ae98170e41cc2ee8902e8b7655aba73ceb0bb23f1\BulkScheduleResponse
    {
        return self::client()->resource(\InfobipSDK\Resources\Email\Resource1\Bulks::class)->get($params);
    }

    /** PUT /email/1/bulks [operationId: reschedule-emails] */
    /**
     * Reschedule messages
     *
     * Change the date and time for sending scheduled messages.
     *
     * Before rescheduling, set the bulk status to `PAUSED`. After rescheduling, set the bulk status to `PENDING` to resume sending.
     */
    public static function put(\InfobipSDK\PutParams\Email\Resource1\Bulks $params): \InfobipSDK\DTOs\N34438aa163eb13a2a06ad96ae98170e41cc2ee8902e8b7655aba73ceb0bb23f1\BulkRescheduleResponse
    {
        return self::client()->resource(\InfobipSDK\Resources\Email\Resource1\Bulks::class)->put($params);
    }

}
