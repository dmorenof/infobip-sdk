<?php

declare(strict_types=1);

namespace InfobipSDK\GetParams\Push\Resource1;

final class Statistics extends \Dmorenof\SdkRuntime\DTO
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
