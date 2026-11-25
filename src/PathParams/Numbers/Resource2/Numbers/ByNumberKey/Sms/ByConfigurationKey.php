<?php

declare(strict_types=1);

namespace InfobipSDK\PathParams\Numbers\Resource2\Numbers\ByNumberKey\Sms;

final class ByConfigurationKey extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'configurationKey',
        'numberKey',
    ];
    public const array OPERATION_FIELDS = [
        'path' => [
            'configurationKey' => 'configurationKey',
            'numberKey' => 'numberKey',
        ],
        'query' => [],
        'header' => [],
    ];

    public string $configurationKey;
    public string $numberKey;
}
