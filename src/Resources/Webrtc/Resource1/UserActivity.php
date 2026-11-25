<?php

declare(strict_types=1);

namespace InfobipSDK\Resources\Webrtc\Resource1;

final class UserActivity extends \InfobipSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/webrtc/1/user-activity',
        'security' => [
            [
                'IBSSOTokenHeader' => [],
            ],
            [
                'APIKeyHeader' => [],
            ],
            [
                'Basic' => [],
            ],
            [
                'OAuth2' => [],
            ],
        ],
        'errors' => [
            400 => '\\InfobipSDK\\DTOs\\Api\\Error',
            401 => '\\InfobipSDK\\DTOs\\Api\\Error',
            403 => '\\InfobipSDK\\DTOs\\Api\\Error',
            429 => '\\InfobipSDK\\DTOs\\Api\\Error',
            500 => '\\InfobipSDK\\DTOs\\Api\\Error',
        ],
        'errorResponses' => [
            400 => [
                'type' => '\\InfobipSDK\\DTOs\\Api\\Error',
                'schemaNullable' => false,
            ],
            401 => [
                'type' => '\\InfobipSDK\\DTOs\\Api\\Error',
                'schemaNullable' => false,
            ],
            403 => [
                'type' => '\\InfobipSDK\\DTOs\\Api\\Error',
                'schemaNullable' => false,
            ],
            429 => [
                'type' => '\\InfobipSDK\\DTOs\\Api\\Error',
                'schemaNullable' => false,
            ],
            500 => [
                'type' => '\\InfobipSDK\\DTOs\\Api\\Error',
                'schemaNullable' => false,
            ],
        ],
        'responseType' => '\\InfobipSDK\\DTOs\\Dc38425c131b95e4c45181495294ce145519edf2a5db70e09ac8bc816d8bceba\\UserActivityPageResponse',
    ];

    /**
     * Get WebRTC user activity
     *
     * Get a page of a WebRTC user activity matching query criteria.
     */
    public function get(\InfobipSDK\GetParams\Webrtc\Resource1\UserActivity $params): \InfobipSDK\DTOs\Dc38425c131b95e4c45181495294ce145519edf2a5db70e09ac8bc816d8bceba\UserActivityPageResponse
    {
        /** @var \InfobipSDK\DTOs\Dc38425c131b95e4c45181495294ce145519edf2a5db70e09ac8bc816d8bceba\UserActivityPageResponse $result */
        $result = $this->executeArguments(self::operation(self::GET), parameters: $params);
        return $result;
    }
}
