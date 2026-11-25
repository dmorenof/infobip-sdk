<?php

declare(strict_types=1);

namespace InfobipSDK\GetParams\Catalogs\Resource1\Catalogs\ByCatalogId;

final class Items extends \Dmorenof\SdkRuntime\DTO
{
    public const array OPERATION_FIELDS = [
    'path' => [],
    'query' => [
        'page' => 'page',
        'queryFilter' => 'queryFilter',
        'size' => 'size',
    ],
    'header' => [],
];

    protected const array VALIDATION = [
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

    public ?int $page {
        set {
            $this->assigning('page', $value);
            $this->page = $value;
        }
    }
    public ?string $queryFilter;
    public ?int $size {
        set {
            $this->assigning('size', $value);
            $this->size = $value;
        }
    }
}
