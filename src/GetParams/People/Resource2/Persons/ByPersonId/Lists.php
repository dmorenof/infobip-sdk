<?php

declare(strict_types=1);

namespace InfobipSDK\GetParams\People\Resource2\Persons\ByPersonId;

final class Lists extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'listNames',
    ];
    public const array OPERATION_FIELDS = [
        'path' => [],
        'query' => [
            'listNames' => 'listNames',
        ],
        'header' => [],
    ];

    protected const array VALIDATION = [
        'listNames' => [
            'items' => [
                'type' => 'string',
                'rules' => [],
            ],
        ],
    ];

    /** @var list<string> */
    public array $listNames;
}
