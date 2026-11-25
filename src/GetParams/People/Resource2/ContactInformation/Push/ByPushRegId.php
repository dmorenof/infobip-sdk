<?php

declare(strict_types=1);

namespace InfobipSDK\GetParams\People\Resource2\ContactInformation\Push;

final class ByPushRegId extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'AppCode',
    ];
    public const array OPERATION_FIELDS = [
        'path' => [],
        'query' => [],
        'header' => [
            'AppCode' => 'AppCode',
        ],
    ];

    public string $AppCode;
}
