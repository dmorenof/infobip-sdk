<?php

declare(strict_types=1);

namespace InfobipSDK\DeleteParams\People\Resource3\Lists\ByListName;

final class Items extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'identifier',
        'itemIds',
        'type',
    ];
    public const array OPERATION_FIELDS = [
        'path' => [],
        'query' => [
            'identifier' => 'identifier',
            'itemIds' => 'itemIds',
            'sender' => 'sender',
            'type' => 'type',
        ],
        'header' => [],
    ];

    protected const array VALIDATION = [
        'identifier' => [
            'minLength' => 1,
        ],
        'itemIds' => [
            'items' => [
                'type' => 'string',
                'rules' => [],
            ],
        ],
    ];

    public string $identifier {
        set {
            $this->assigning('identifier', $value);
            $this->identifier = $value;
        }
    }
    /** @var list<string> */
    public array $itemIds;
    public ?string $sender;
    public \InfobipSDK\Enums\N41037c0c5bdf4509c49aaf5c9a141a8857afc7b3859839aa4c690d84fb75d2e2\PersonUniqueFieldType $type;
}
