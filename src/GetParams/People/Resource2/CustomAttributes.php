<?php

declare(strict_types=1);

namespace InfobipSDK\GetParams\People\Resource2;

final class CustomAttributes extends \Dmorenof\SdkRuntime\DTO
{
    public const array OPERATION_FIELDS = [
    'path' => [],
    'query' => [
        'includeTotalCount' => 'includeTotalCount',
        'limit' => 'limit',
        'orderBy' => 'orderBy',
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
}
