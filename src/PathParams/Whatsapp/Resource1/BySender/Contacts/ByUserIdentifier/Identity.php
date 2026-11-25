<?php

declare(strict_types=1);

namespace InfobipSDK\PathParams\Whatsapp\Resource1\BySender\Contacts\ByUserIdentifier;

final class Identity extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'sender',
        'userIdentifier',
    ];
    public const array OPERATION_FIELDS = [
        'path' => [
            'sender' => 'sender',
            'userIdentifier' => 'userIdentifier',
        ],
        'query' => [],
        'header' => [],
    ];

    public string $sender;
    public string $userIdentifier;
}
