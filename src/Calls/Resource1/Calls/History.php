<?php

declare(strict_types=1);

namespace InfobipSDK\Calls\Resource1\Calls;

final class History extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** GET /calls/1/calls/history [operationId: get-calls-history] */
    /**
     * Get calls history
     *
     * Get calls history with pagination. Calls history retention period is 5 days.
     */
    public static function get(?\InfobipSDK\GetParams\Calls\Resource1\Calls\History $params = null): \InfobipSDK\DTOs\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\CallLogPage
    {
        return self::client()->resource(\InfobipSDK\Resources\Calls\Resource1\Calls\History::class)->get($params);
    }
}
