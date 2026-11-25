<?php

declare(strict_types=1);

namespace InfobipSDK\PutParams\Sms\Resource1\Bulks;

final class Status extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'bulkId',
        'body',
    ];
    public const array OPERATION_FIELDS = [
        'path' => [],
        'query' => [
            'bulkId' => 'bulkId',
        ],
        'header' => [],
    ];

    public const bool OPERATION_BODY = true;

    public string $bulkId;
    public \InfobipSDK\DTOs\C8006fe0d154740d4f3e0ed89b54c9c54d35edf85894782dbfe7d9ae0ea23725\UpdateStatusRequest $body;
}
