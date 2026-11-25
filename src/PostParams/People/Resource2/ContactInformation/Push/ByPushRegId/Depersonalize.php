<?php

declare(strict_types=1);

namespace InfobipSDK\PostParams\People\Resource2\ContactInformation\Push\ByPushRegId;

final class Depersonalize extends \Dmorenof\SdkRuntime\DTO
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
