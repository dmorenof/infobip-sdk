<?php

declare(strict_types=1);

namespace InfobipSDK\GetParams\People\Resource2\Persons\ByPersonId\Lists\ByListName;

final class Items extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'itemIds',
];
    public const array OPERATION_FIELDS = [
    'path' => [],
    'query' => [
        'itemIds' => 'itemIds',
    ],
    'header' => [],
];

    protected const array VALIDATION = [
    'itemIds' => [
        'items' => [
            'type' => 'string',
            'rules' => [],
        ],
    ],
];

    /** @var list<string> */
    public array $itemIds;
}
