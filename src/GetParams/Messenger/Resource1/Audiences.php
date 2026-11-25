<?php

declare(strict_types=1);

namespace InfobipSDK\GetParams\Messenger\Resource1;

final class Audiences extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'adAccountId',
];
    public const array OPERATION_FIELDS = [
    'path' => [],
    'query' => [
        'adAccountId' => 'adAccountId',
    ],
    'header' => [],
];

    public string $adAccountId;
}
