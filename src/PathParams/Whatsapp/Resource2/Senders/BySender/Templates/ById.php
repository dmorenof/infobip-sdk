<?php

declare(strict_types=1);

namespace InfobipSDK\PathParams\Whatsapp\Resource2\Senders\BySender\Templates;

final class ById extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'id',
        'sender',
    ];
    public const array OPERATION_FIELDS = [
        'path' => [
            'id' => 'id',
            'sender' => 'sender',
        ],
        'query' => [],
        'header' => [],
    ];

    public string $id;
    public string $sender;
}
