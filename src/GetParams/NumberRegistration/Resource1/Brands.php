<?php

declare(strict_types=1);

namespace InfobipSDK\GetParams\NumberRegistration\Resource1;

final class Brands extends \Dmorenof\SdkRuntime\DTO
{
    public const array OPERATION_FIELDS = [
    'path' => [],
    'query' => [
        'applicationId' => 'applicationId',
        'entityId' => 'entityId',
        'id' => 'id',
        'nameLike' => 'nameLike',
        'page' => 'page',
        'referenceId' => 'referenceId',
        'size' => 'size',
        'sort' => 'sort',
        'type' => 'type',
    ],
    'header' => [],
];

    protected const array VALIDATION = [
    'id' => [
        'items' => [
            'type' => 'string',
            'rules' => [],
        ],
    ],
    'page' => [
        'format' => 'int32',
    ],
    'referenceId' => [
        'items' => [
            'type' => 'string',
            'rules' => [],
        ],
    ],
    'size' => [
        'format' => 'int32',
    ],
    'sort' => [
        'items' => [
            'type' => 'string',
            'rules' => [],
        ],
    ],
    'type' => [
        'items' => [
            'type' => 'string',
            'rules' => [],
        ],
    ],
];

    public ?string $applicationId;
    public ?string $entityId;
    /** @var list<string>|null */
    public ?array $id;
    public ?string $nameLike;
    public ?int $page {
        set {
            $this->assigning('page', $value);
            $this->page = $value;
        }
    }
    /** @var list<string>|null */
    public ?array $referenceId;
    public ?int $size {
        set {
            $this->assigning('size', $value);
            $this->size = $value;
        }
    }
    /** @var list<string>|null */
    public ?array $sort;
    /** @var list<string>|null */
    public ?array $type;
}
