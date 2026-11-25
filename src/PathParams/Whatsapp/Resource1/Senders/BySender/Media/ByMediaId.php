<?php

declare(strict_types=1);

namespace InfobipSDK\PathParams\Whatsapp\Resource1\Senders\BySender\Media;

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

    protected const array VALIDATION = [
    'mediaId' => [
        'minLength' => 1,
    ],
];

    public string $mediaId {
        set {
            $this->assigning('mediaId', $value);
            $this->mediaId = $value;
        }
    }
    public string $sender;
}
