<?php

declare(strict_types=1);

namespace InfobipSDK\PathParams\Whatsapp\Resource1\Senders\BySender\Message\ByMessageId;

final class Read extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'messageId',
    'sender',
];
    public const array OPERATION_FIELDS = [
    'path' => [
        'messageId' => 'messageId',
        'sender' => 'sender',
    ],
    'query' => [],
    'header' => [],
];

    public string $messageId;
    public string $sender;
}
