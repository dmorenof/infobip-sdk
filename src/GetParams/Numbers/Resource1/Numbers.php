<?php

declare(strict_types=1);

namespace InfobipSDK\GetParams\Numbers\Resource1;

final class Numbers extends \Dmorenof\SdkRuntime\DTO
{
    public const array OPERATION_FIELDS = [
    'path' => [],
    'query' => [
        'limit' => 'limit',
        'number' => 'number',
        'page' => 'page',
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

    public ?int $limit {
        set {
            $this->assigning('limit', $value);
            $this->limit = $value;
        }
    }
    public ?string $number;
    public ?int $page {
        set {
            $this->assigning('page', $value);
            $this->page = $value;
        }
    }
}
