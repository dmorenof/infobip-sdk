<?php

declare(strict_types=1);

namespace InfobipSDK\Messenger\Resource1\Pages\ByPageId;

final class Subscriptions extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** GET /messenger/1/pages/{pageId}/subscriptions [operationId: get-messenger-marketing-subscriptions] */
    /**
     * Get marketing subscriptions
     *
     * Get all messenger marketing subscriptions for single page. For pages with many subscriptions, set `useCursor=true` and follow `nextCursor` to fetch them page by page. <br/> Collecting subscription tokens still works on the Messenger platform. However, marketing messages on Messenger are no longer available for new users. For existing users, this feature will be deprecated on January 12, 2026. After this date, marketing messages will no longer be supported.
     * Documentation: https://www.infobip.com/docs/facebook-messenger
     */
    public static function get(string $pageId, ?\InfobipSDK\GetParams\Messenger\Resource1\Pages\ByPageId\Subscriptions $params = null): \InfobipSDK\Responses\Messenger\Resource1\Pages\ByPageId\Subscriptions\Get\ByPageIdSubscriptionsResponse
    {
        return self::client()->resource(\InfobipSDK\Resources\Messenger\Resource1\Pages\ByPageId\Subscriptions::class)->get($pageId, $params);
    }

    /** DELETE /messenger/1/pages/{pageId}/subscriptions/{notificationMessagesToken} [operationId: delete-messenger-marketing-subscription] */
    /**
     * Delete marketing subscription
     *
     * Unsubscribe a single notification messages token from the Page marketing messages audience.
     * Documentation: https://www.infobip.com/docs/facebook-messenger
     */
    public static function deleteByNotificationMessagesToken(\InfobipSDK\PathParams\Messenger\Resource1\Pages\ByPageId\Subscriptions\ByNotificationMessagesToken $identifier): void
    {
        self::client()->resource(\InfobipSDK\Resources\Messenger\Resource1\Pages\ByPageId\Subscriptions::class)->deleteByNotificationMessagesToken($identifier);
    }

}
