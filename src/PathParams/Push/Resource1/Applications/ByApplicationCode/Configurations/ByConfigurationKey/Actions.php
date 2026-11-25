<?php

declare(strict_types=1);

namespace InfobipSDK\PathParams\Push\Resource1\Applications\ByApplicationCode\Configurations\ByConfigurationKey;

final class Actions extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'applicationCode',
    'configurationKey',
];
    public const array OPERATION_FIELDS = [
    'path' => [
        'applicationCode' => 'applicationCode',
        'configurationKey' => 'configurationKey',
    ],
    'query' => [],
    'header' => [],
];

    public string $applicationCode;
    public string $configurationKey;
}
