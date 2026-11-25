<?php

declare(strict_types=1);

namespace InfobipSDK\DeleteParams\Catalogs\Resource1\Catalogs\ByCatalogId;

final class Items extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'queryFilter',
];
    public const array OPERATION_FIELDS = [
    'path' => [],
    'query' => [
        'queryFilter' => 'queryFilter',
    ],
    'header' => [],
];

    public string $queryFilter;
}
