<?php

declare(strict_types=1);

namespace InfobipSDK\Tiktok\Resource1;

final class Logs extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** GET /tiktok/1/logs [operationId: get-outbound-tiktok-message-logs] */
    /**
     * Get TikTok message logs
     *
     * Use this endpoint to retrieve outbound TikTok message logs for display in a user interface. Logs are available for the last 48 hours.
     */
    public static function get(?\InfobipSDK\GetParams\Tiktok\Resource1\Logs $params = null): \InfobipSDK\DTOs\E2cbdd2d36d35e3e9c85bc5344135c1a087d73d9cf6c9dc8cf1c258211186c7c\LogResponseLogTikTokOutboundMessageContent
    {
        return self::client()->resource(\InfobipSDK\Resources\Tiktok\Resource1\Logs::class)->get($params);
    }
}
