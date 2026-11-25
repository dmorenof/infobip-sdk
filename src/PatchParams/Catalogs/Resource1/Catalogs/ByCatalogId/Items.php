<?php

declare(strict_types=1);

namespace InfobipSDK\PatchParams\Catalogs\Resource1\Catalogs\ByCatalogId;

final class Items extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'queryFilter',
    'body',
];
    public const array OPERATION_FIELDS = [
    'path' => [],
    'query' => [
        'queryFilter' => 'queryFilter',
    ],
    'header' => [],
];

    public const bool OPERATION_BODY = true;

    public string $queryFilter;
    public \InfobipSDK\Collections\ItemsBodyCollection $body;
}
