<?php

declare(strict_types=1);

namespace InfobipSDK\PathParams\Livechat\Resource1\Widgets\ByWidgetId\Sessions;

final class BySessionId extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'sessionId',
        'widgetId',
    ];
    public const array OPERATION_FIELDS = [
        'path' => [
            'sessionId' => 'sessionId',
            'widgetId' => 'widgetId',
        ],
        'query' => [],
        'header' => [],
    ];

    public string $sessionId;
    public string $widgetId;
}
