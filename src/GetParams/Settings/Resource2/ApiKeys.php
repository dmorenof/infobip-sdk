<?php

declare(strict_types=1);

namespace InfobipSDK\GetParams\Settings\Resource2;

final class ApiKeys extends \Dmorenof\SdkRuntime\DTO
{
    public const array OPERATION_FIELDS = [
    'path' => [],
    'query' => [
        'accountId' => 'accountId',
        'apiKeySecret' => 'apiKeySecret',
        'enabled' => 'enabled',
        'name' => 'name',
        'orderBy' => 'orderBy',
        'orderDirection' => 'orderDirection',
        'page' => 'page',
        'size' => 'size',
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
];

    public ?string $accountId;
    public ?string $apiKeySecret;
    public ?bool $enabled;
    public ?string $name;
    public ?string $orderBy;
    public ?string $orderDirection;
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
}
