<?php

declare(strict_types=1);

namespace InfobipSDK\PathParams\People\Resource3\Lists\ByListName\Items;

final class ByItemId extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'itemId',
        'listName',
    ];
    public const array OPERATION_FIELDS = [
        'path' => [
            'itemId' => 'itemId',
            'listName' => 'listName',
        ],
        'query' => [],
        'header' => [],
    ];

    protected const array VALIDATION = [
        'listName' => [
            'minLength' => 1,
        ],
    ];

    public string $itemId;
    public string $listName {
        set {
            $this->assigning('listName', $value);
            $this->listName = $value;
        }
    }
}
