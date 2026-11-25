<?php

declare(strict_types=1);

namespace InfobipSDK\GetParams\Push\Resource1\Inbox;

final class Reports extends \Dmorenof\SdkRuntime\DTO
{
    public const array OPERATION_FIELDS = [
        'path' => [],
        'query' => [
            'limit' => 'limit',
        ],
        'header' => [],
    ];

    public ?int $limit;
}
