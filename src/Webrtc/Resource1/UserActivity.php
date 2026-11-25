<?php

declare(strict_types=1);

namespace InfobipSDK\Webrtc\Resource1;

final class UserActivity extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** GET /webrtc/1/user-activity [operationId: get-user-activity] */
    /**
     * Get WebRTC user activity
     *
     * Get a page of a WebRTC user activity matching query criteria.
     */
    public static function get(\InfobipSDK\GetParams\Webrtc\Resource1\UserActivity $params): \InfobipSDK\DTOs\Dc38425c131b95e4c45181495294ce145519edf2a5db70e09ac8bc816d8bceba\UserActivityPageResponse
    {
        return self::client()->resource(\InfobipSDK\Resources\Webrtc\Resource1\UserActivity::class)->get($params);
    }
}
