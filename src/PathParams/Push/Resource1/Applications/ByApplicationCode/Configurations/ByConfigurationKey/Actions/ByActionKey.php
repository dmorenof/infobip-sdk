<?php

declare(strict_types=1);

namespace InfobipSDK\PathParams\Push\Resource1\Applications\ByApplicationCode\Configurations\ByConfigurationKey\Actions;

final class ByActionKey extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'actionKey',
    'applicationCode',
    'configurationKey',
];
    public const array OPERATION_FIELDS = [
    'path' => [
        'actionKey' => 'actionKey',
        'applicationCode' => 'applicationCode',
        'configurationKey' => 'configurationKey',
    ],
    'query' => [],
    'header' => [],
];

    public string $actionKey;
    public string $applicationCode;
    public string $configurationKey;
}
