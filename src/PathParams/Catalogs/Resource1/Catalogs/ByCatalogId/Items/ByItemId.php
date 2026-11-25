<?php

declare(strict_types=1);

namespace InfobipSDK\PathParams\Catalogs\Resource1\Catalogs\ByCatalogId\Items;

final class ByItemId extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'catalogId',
        'itemId',
    ];
    public const array OPERATION_FIELDS = [
        'path' => [
            'catalogId' => 'catalogId',
            'itemId' => 'itemId',
        ],
        'query' => [],
        'header' => [],
    ];

    public int $catalogId;
    public int $itemId;
}
