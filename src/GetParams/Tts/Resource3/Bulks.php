<?php

declare(strict_types=1);

namespace InfobipSDK\GetParams\Tts\Resource3;

final class Bulks extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'bulkId',
];
    public const array OPERATION_FIELDS = [
    'path' => [],
    'query' => [
        'bulkId' => 'bulkId',
    ],
    'header' => [],
];

    public string $bulkId;
}
