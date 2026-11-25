<?php

declare(strict_types=1);

namespace InfobipSDK\PathParams\People\Resource2\Persons\ByPersonId\Lists\ByListName\Items;

final class ByItemId extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'itemId',
        'listName',
        'personId',
    ];
    public const array OPERATION_FIELDS = [
        'path' => [
            'itemId' => 'itemId',
            'listName' => 'listName',
            'personId' => 'personId',
        ],
        'query' => [],
        'header' => [],
    ];

    protected const array VALIDATION = [
        'listName' => [
            'minLength' => 1,
        ],
        'personId' => [
            'minimum' => 1,
        ],
    ];

    public string $itemId;
    public string $listName {
        set {
            $this->assigning('listName', $value);
            $this->listName = $value;
        }
    }
    public int $personId {
        set {
            $this->assigning('personId', $value);
            $this->personId = $value;
        }
    }
}
