<?php

declare(strict_types=1);

namespace InfobipSDK\GetParams\Omni\Resource1;

final class Scenarios extends \Dmorenof\SdkRuntime\DTO
{
    public const array OPERATION_FIELDS = [
        'path' => [],
        'query' => [
            'isDefault' => 'isDefault',
            'limit' => 'limit',
            'page' => 'page',
        ],
        'header' => [],
    ];

    protected const array VALIDATION = [
        'limit' => [
            'minimum' => 0,
            'format' => 'int32',
        ],
        'page' => [
            'minimum' => 0,
            'format' => 'int32',
        ],
    ];

    public ?bool $isDefault;
    public ?int $limit {
        set {
            $this->assigning('limit', $value);
            $this->limit = $value;
        }
    }
    public ?int $page {
        set {
            $this->assigning('page', $value);
            $this->page = $value;
        }
    }
}
