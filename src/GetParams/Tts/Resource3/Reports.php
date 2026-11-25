<?php

declare(strict_types=1);

namespace InfobipSDK\GetParams\Tts\Resource3;

final class Reports extends \Dmorenof\SdkRuntime\DTO
{
    public const array OPERATION_FIELDS = [
    'path' => [],
    'query' => [
        'bulkId' => 'bulkId',
        'limit' => 'limit',
        'messageId' => 'messageId',
    ],
    'header' => [],
];

    public ?string $bulkId;
    public ?int $limit;
    public ?string $messageId;
}
