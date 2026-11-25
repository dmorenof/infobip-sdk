<?php

declare(strict_types=1);

namespace InfobipSDK\Livechat\Resource1\Widgets\ByWidgetId;

final class Sessions extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** DELETE /livechat/1/widgets/{widgetId}/sessions/{sessionId} [operationId: invalidate-customer-session] */
    /**
     * Invalidate authenticated session
     *
     * Invalidates an [authenticated Live Chat web session](https://www.infobip.com/docs/live-chat/users-and-authentication#web-authentication). Use it to end a user's session explicitly, for example when the user logs out or for security reasons. Identify the session by its `sid`, the session ID that you set in the personalization token. To end the session of the current session token, use [Terminate session](/docs/api/channels/live-chat/sessions/terminate-livechat-session) instead.
     */
    public static function deleteBySessionId(\InfobipSDK\PathParams\Livechat\Resource1\Widgets\ByWidgetId\Sessions\BySessionId $identifier): void
    {
        self::client()->resource(\InfobipSDK\Resources\Livechat\Resource1\Widgets\ByWidgetId\Sessions::class)->deleteBySessionId($identifier);
    }
}
