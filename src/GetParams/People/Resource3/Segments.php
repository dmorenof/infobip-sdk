<?php

declare(strict_types=1);

namespace InfobipSDK\GetParams\People\Resource3;

final class Segments extends \Dmorenof\SdkRuntime\DTO
{
    public const array OPERATION_FIELDS = [
        'path' => [],
        'query' => [
            'page' => 'page',
            'size' => 'size',
            'sort' => 'sort',
        ],
        'header' => [],
    ];

    protected const array VALIDATION = [
        'size' => [
            'minimum' => 1,
            'maximum' => 1000,
        ],
        'sort' => [
            'items' => [
                'type' => 'string',
                'rules' => [],
            ],
        ],
    ];

    public ?int $page;
    public ?int $size {
        set {
            $this->assigning('size', $value);
            $this->size = $value;
        }
    }
    /** @var list<string>|null */
    public ?array $sort;
}
