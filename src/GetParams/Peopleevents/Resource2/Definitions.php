<?php

declare(strict_types=1);

namespace InfobipSDK\GetParams\Peopleevents\Resource2;

final class Definitions extends \Dmorenof\SdkRuntime\DTO
{
    public const array OPERATION_FIELDS = [
    'path' => [],
    'query' => [
        'category' => 'category',
        'limit' => 'limit',
        'offset' => 'offset',
        'orderField' => 'orderField',
        'orderType' => 'orderType',
        'searchText' => 'searchText',
    ],
    'header' => [],
];

    protected const array VALIDATION = [
    'category' => [
        'uniqueItems' => true,
        'items' => [
            'type' => 'string',
            'rules' => [
                'enum' => [
                    'channel',
                    'external',
                    'person',
                    'product',
                    'template',
                ],
            ],
        ],
    ],
    'limit' => [
        'minimum' => 0,
        'maximum' => 2147483647,
        'format' => 'int32',
    ],
    'offset' => [
        'minimum' => 0,
        'maximum' => 2147483647,
        'format' => 'int32',
    ],
];

    /** @var list<string>|null */
    public ?array $category;
    public ?int $limit {
        set {
            $this->assigning('limit', $value);
            $this->limit = $value;
        }
    }
    public ?int $offset {
        set {
            $this->assigning('offset', $value);
            $this->offset = $value;
        }
    }
    public ?\InfobipSDK\Enums\Fadcd3a5e2560b383cc614bf34d902f536c2b4a12ddd61a5d337e7d4f40ab864\DefinitionOrderField $orderField;
    public ?\InfobipSDK\Enums\Fadcd3a5e2560b383cc614bf34d902f536c2b4a12ddd61a5d337e7d4f40ab864\DefinitionOrderDirection $orderType;
    public ?string $searchText;
}
