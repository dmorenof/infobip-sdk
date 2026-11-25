<?php

declare(strict_types=1);

namespace InfobipSDK\Resources\Messenger\Resource1\Pages\ByPageId;

final class Subscriptions extends \InfobipSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/messenger/1/pages/{pageId}/subscriptions',
        'security' => [
            [
                'OAuth2' => [],
            ],
            [
                'IBSSOTokenHeader' => [],
            ],
            [
                'APIKeyHeader' => [],
            ],
            [
                'Basic' => [],
            ],
        ],
        'errors' => [
            400 => '\\InfobipSDK\\DTOs\\Api\\Error',
            401 => '\\InfobipSDK\\DTOs\\Api\\Error',
            403 => '\\InfobipSDK\\DTOs\\Api\\Error',
            404 => null,
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
            404 => [
                'type' => null,
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
        'responseType' => '\\InfobipSDK\\Responses\\Messenger\\Resource1\\Pages\\ByPageId\\Subscriptions\\Get\\ByPageIdSubscriptionsResponse',
        'querySerialization' => [
            'customAudienceIds' => 'multi',
        ],
    ];

    /**
     * Get marketing subscriptions
     *
     * Get all messenger marketing subscriptions for single page. For pages with many subscriptions, set `useCursor=true` and follow `nextCursor` to fetch them page by page. <br/> Collecting subscription tokens still works on the Messenger platform. However, marketing messages on Messenger are no longer available for new users. For existing users, this feature will be deprecated on January 12, 2026. After this date, marketing messages will no longer be supported.
     * Documentation: https://www.infobip.com/docs/facebook-messenger
     */
    public function get(string $pageId, ?\InfobipSDK\GetParams\Messenger\Resource1\Pages\ByPageId\Subscriptions $params = null): \InfobipSDK\Responses\Messenger\Resource1\Pages\ByPageId\Subscriptions\Get\ByPageIdSubscriptionsResponse
    {
        /** @var \InfobipSDK\Responses\Messenger\Resource1\Pages\ByPageId\Subscriptions\Get\ByPageIdSubscriptionsResponse $result */
        $result = $this->executeArguments(self::operation(self::GET), path: ['pageId' => $pageId], parameters: $params);
        return $result;
    }

    private const array DELETE_BY_NOTIFICATION_MESSAGES_TOKEN = [
        'method' => 'DELETE',
        'path' => '/messenger/1/pages/{pageId}/subscriptions/{notificationMessagesToken}',
        'security' => [
            [
                'OAuth2' => [],
            ],
            [
                'IBSSOTokenHeader' => [],
            ],
            [
                'APIKeyHeader' => [],
            ],
            [
                'Basic' => [],
            ],
        ],
        'success' => [
            204,
        ],
        'errors' => [
            400 => '\\InfobipSDK\\DTOs\\Api\\Error',
            401 => '\\InfobipSDK\\DTOs\\Api\\Error',
            403 => '\\InfobipSDK\\DTOs\\Api\\Error',
            404 => '\\InfobipSDK\\DTOs\\Api\\Error',
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
            404 => [
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
    ];

    /**
     * Delete marketing subscription
     *
     * Unsubscribe a single notification messages token from the Page marketing messages audience.
     * Documentation: https://www.infobip.com/docs/facebook-messenger
     */
    public function deleteByNotificationMessagesToken(\InfobipSDK\PathParams\Messenger\Resource1\Pages\ByPageId\Subscriptions\ByNotificationMessagesToken $identifier): void
    {
        $this->executeArguments(self::operation(self::DELETE_BY_NOTIFICATION_MESSAGES_TOKEN), path: $identifier);
        return;
    }
}
