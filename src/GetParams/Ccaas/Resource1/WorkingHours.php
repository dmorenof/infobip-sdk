<?php

declare(strict_types=1);

namespace InfobipSDK\GetParams\Ccaas\Resource1;

final class WorkingHours extends \Dmorenof\SdkRuntime\DTO
{
    public const array OPERATION_FIELDS = [
        'path' => [],
        'query' => [
            'createdAfter' => 'createdAfter',
            'createdBefore' => 'createdBefore',
            'enabled' => 'enabled',
            'isDefault' => 'isDefault',
            'limit' => 'limit',
            'name' => 'name',
            'orderBy' => 'orderBy',
            'page' => 'page',
            'updatedAfter' => 'updatedAfter',
            'updatedBefore' => 'updatedBefore',
        ],
        'header' => [],
    ];

    protected const array VALIDATION = [
        'limit' => [
            'maximum' => 999,
        ],
    ];

    public ?string $createdAfter;
    public ?string $createdBefore;
    public ?bool $enabled;
    public ?bool $isDefault;
    public ?int $limit {
        set {
            $this->assigning('limit', $value);
            $this->limit = $value;
        }
    }
    public ?string $name;
    public ?string $orderBy;
    public ?int $page;
    public ?string $updatedAfter;
    public ?string $updatedBefore;
}
