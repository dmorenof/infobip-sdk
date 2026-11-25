<?php

declare(strict_types=1);

namespace InfobipSDK\GetParams\Catalogs\Resource1;

final class Catalogs extends \Dmorenof\SdkRuntime\DTO
{
    public const array OPERATION_FIELDS = [
    'path' => [],
    'query' => [
        'ids' => 'ids',
        'name' => 'name',
        'page' => 'page',
        'size' => 'size',
        'type' => 'type',
    ],
    'header' => [],
];

    protected const array VALIDATION = [
    'ids' => [
        'items' => [
            'type' => 'int',
            'rules' => [],
        ],
    ],
    'page' => [
        'minimum' => 0,
        'format' => 'int32',
    ],
    'size' => [
        'minimum' => 1,
        'maximum' => 100,
        'format' => 'int32',
    ],
];

    /** @var list<int>|null */
    public ?array $ids;
    public ?string $name;
    public ?int $page {
        set {
            $this->assigning('page', $value);
            $this->page = $value;
        }
    }
    public ?int $size {
        set {
            $this->assigning('size', $value);
            $this->size = $value;
        }
    }
    public ?string $type;
}
