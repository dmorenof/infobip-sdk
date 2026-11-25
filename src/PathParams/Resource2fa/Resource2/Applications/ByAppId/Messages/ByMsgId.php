<?php

declare(strict_types=1);

namespace InfobipSDK\PathParams\Resource2fa\Resource2\Applications\ByAppId\Messages;

final class ByMsgId extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'appId',
        'msgId',
    ];
    public const array OPERATION_FIELDS = [
        'path' => [
            'appId' => 'appId',
            'msgId' => 'msgId',
        ],
        'query' => [],
        'header' => [],
    ];

    public string $appId;
    public string $msgId;
}
