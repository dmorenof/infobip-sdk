<?php

declare(strict_types=1);

namespace InfobipSDK\PathParams\Catalogs\Resource1\Catalogs\ByCatalogId\Fields;

final class ByFieldId extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'catalogId',
        'fieldId',
    ];
    public const array OPERATION_FIELDS = [
        'path' => [
            'catalogId' => 'catalogId',
            'fieldId' => 'fieldId',
        ],
        'query' => [],
        'header' => [],
    ];

    public int $catalogId;
    public string $fieldId;
}
