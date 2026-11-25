<?php

declare(strict_types=1);

namespace InfobipSDK\PathParams\Messenger\Resource1\Pages\ByPageId\Subscriptions;

final class ByNotificationMessagesToken extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'notificationMessagesToken',
    'pageId',
];
    public const array OPERATION_FIELDS = [
    'path' => [
        'notificationMessagesToken' => 'notificationMessagesToken',
        'pageId' => 'pageId',
    ],
    'query' => [],
    'header' => [],
];

    public string $notificationMessagesToken;
    public string $pageId;
}
