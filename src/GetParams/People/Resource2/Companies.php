<?php

declare(strict_types=1);

namespace InfobipSDK\GetParams\People\Resource2;

final class Companies extends \Dmorenof\SdkRuntime\DTO
{
    public const array OPERATION_FIELDS = [
        'path' => [],
        'query' => [
            'domain' => 'domain',
            'externalId' => 'externalId',
            'filter' => 'filter',
            'id' => 'id',
            'includeTotalCount' => 'includeTotalCount',
            'limit' => 'limit',
            'name' => 'name',
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

    public ?string $domain;
    public ?string $externalId;
    public ?string $filter;
    public ?int $id;
    public ?bool $includeTotalCount;
    public ?int $limit {
        set {
            $this->assigning('limit', $value);
            $this->limit = $value;
        }
    }
    public ?string $name;
    public ?string $orderBy;
    public ?int $page {
        set {
            $this->assigning('page', $value);
            $this->page = $value;
        }
    }
}
