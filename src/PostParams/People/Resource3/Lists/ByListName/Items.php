<?php

declare(strict_types=1);

namespace InfobipSDK\PostParams\People\Resource3\Lists\ByListName;

final class Items extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'identifier',
    'type',
    'body',
];
    public const array OPERATION_FIELDS = [
    'path' => [],
    'query' => [
        'identifier' => 'identifier',
        'sender' => 'sender',
        'type' => 'type',
    ],
    'header' => [],
];

    public const bool OPERATION_BODY = true;

    protected const array VALIDATION = [
    'identifier' => [
        'minLength' => 1,
    ],
];

    public string $identifier {
        set {
            $this->assigning('identifier', $value);
            $this->identifier = $value;
        }
    }
    public ?string $sender;
    public \InfobipSDK\Enums\N41037c0c5bdf4509c49aaf5c9a141a8857afc7b3859839aa4c690d84fb75d2e2\PersonUniqueFieldType $type;
    public \InfobipSDK\Collections\AppendListItemsBodyArray\ItemsBodyCollection $body;
}
