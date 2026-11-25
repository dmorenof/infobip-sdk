<?php

declare(strict_types=1);

namespace InfobipSDK\Resources\Livechat\Resource1\Widgets\ByWidgetId;

final class Sessions extends \InfobipSDK\Client
{
    private const array DELETE_BY_SESSION_ID = [
        'method' => 'DELETE',
        'path' => '/livechat/1/widgets/{widgetId}/sessions/{sessionId}',
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
            401 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            403 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            404 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            500 => '\\InfobipSDK\\DTOs\\Api\\Exception',
        ],
        'errorResponses' => [
            401 => [
                'type' => '\\InfobipSDK\\DTOs\\Api\\Exception',
                'schemaNullable' => false,
            ],
            403 => [
                'type' => '\\InfobipSDK\\DTOs\\Api\\Exception',
                'schemaNullable' => false,
            ],
            404 => [
                'type' => '\\InfobipSDK\\DTOs\\Api\\Exception',
                'schemaNullable' => false,
            ],
            500 => [
                'type' => '\\InfobipSDK\\DTOs\\Api\\Exception',
                'schemaNullable' => false,
            ],
        ],
    ];

    /**
     * Invalidate authenticated session
     *
     * Invalidates an [authenticated Live Chat web session](https://www.infobip.com/docs/live-chat/users-and-authentication#web-authentication). Use it to end a user's session explicitly, for example when the user logs out or for security reasons. Identify the session by its `sid`, the session ID that you set in the personalization token. To end the session of the current session token, use [Terminate session](/docs/api/channels/live-chat/sessions/terminate-livechat-session) instead.
     */
    public function deleteBySessionId(\InfobipSDK\PathParams\Livechat\Resource1\Widgets\ByWidgetId\Sessions\BySessionId $identifier): void
    {
        $this->executeArguments(self::operation(self::DELETE_BY_SESSION_ID), path: $identifier);
        return;
    }

}
