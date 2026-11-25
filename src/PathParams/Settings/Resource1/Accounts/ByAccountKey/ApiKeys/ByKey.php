<?php

declare(strict_types=1);

namespace InfobipSDK\PathParams\Settings\Resource1\Accounts\ByAccountKey\ApiKeys;

final class ByKey extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'accountKey',
    'key',
];
    public const array OPERATION_FIELDS = [
    'path' => [
        'accountKey' => 'accountKey',
        'key' => 'key',
    ],
    'query' => [],
    'header' => [],
];

    public string $accountKey;
    public string $key;
}
