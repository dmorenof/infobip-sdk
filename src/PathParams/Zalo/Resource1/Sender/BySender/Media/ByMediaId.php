<?php

declare(strict_types=1);

namespace InfobipSDK\PathParams\Zalo\Resource1\Sender\BySender\Media;

final class ByMediaId extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'mediaId',
    'sender',
];
    public const array OPERATION_FIELDS = [
    'path' => [
        'mediaId' => 'mediaId',
        'sender' => 'sender',
    ],
    'query' => [],
    'header' => [],
];

    public string $mediaId;
    public string $sender;
}
