<?php

declare(strict_types=1);

namespace InfobipSDK\GetParams\NumberRegistration\Resource1\Brands\ByBrandId;

final class Vets extends \Dmorenof\SdkRuntime\DTO
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
        'page' => [
            'format' => 'int32',
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
    ];

    public ?int $page {
        set {
            $this->assigning('page', $value);
            $this->page = $value;
        }
    }
    public ?int $size {
        set {
            $this->assigning('size', $value);
            $this->size = $value;
        }
    }
    /** @var list<string>|null */
    public ?array $sort;
}
