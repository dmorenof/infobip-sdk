<?php

declare(strict_types=1);

namespace InfobipSDK\GetParams\Push\Resource1\Applications;

final class ByApplicationCode extends \Dmorenof\SdkRuntime\DTO
{
    public const array OPERATION_FIELDS = [
        'path' => [],
        'query' => [
            'useAppCodeAsAppId' => 'useAppCodeAsAppId',
        ],
        'header' => [],
    ];

    public ?bool $useAppCodeAsAppId;
}
