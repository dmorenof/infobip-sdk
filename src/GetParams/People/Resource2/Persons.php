<?php

declare(strict_types=1);

namespace InfobipSDK\GetParams\People\Resource2;

final class Persons extends \Dmorenof\SdkRuntime\DTO
{
    public const array OPERATION_FIELDS = [
    'path' => [],
    'query' => [
        'filter' => 'filter',
        'identifier' => 'identifier',
        'includeTotalCount' => 'includeTotalCount',
        'limit' => 'limit',
        'orderBy' => 'orderBy',
        'page' => 'page',
        'sender' => 'sender',
        'type' => 'type',
    ],
    'header' => [],
];

    protected const array VALIDATION = [
    'limit' => [
        'format' => 'int32',
    ],
    'page' => [
        'format' => 'int32',
    ],
];

    public ?string $filter;
    public ?string $identifier;
    public ?bool $includeTotalCount;
    public ?int $limit {
        set {
            $this->assigning('limit', $value);
            $this->limit = $value;
        }
    }
    public ?string $orderBy;
    public ?int $page {
        set {
            $this->assigning('page', $value);
            $this->page = $value;
        }
    }
    public ?string $sender;
    public ?\InfobipSDK\Enums\N67ea2a2f468d202db25df7b2d86e54c3628a74b47c8fd9cf8429d0e9a038dd27\PersonUniqueFieldType $type;
}
