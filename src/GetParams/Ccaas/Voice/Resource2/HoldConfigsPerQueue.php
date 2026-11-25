<?php

declare(strict_types=1);

namespace InfobipSDK\GetParams\Ccaas\Voice\Resource2;

final class HoldConfigsPerQueue extends \Dmorenof\SdkRuntime\DTO
{
    public const array OPERATION_FIELDS = [
        'path' => [],
        'query' => [
            'pageNumber' => 'pageNumber',
            'pageSize' => 'pageSize',
            'sortBy' => 'sortBy',
            'sortDirection' => 'sortDirection',
        ],
        'header' => [],
    ];

    protected const array VALIDATION = [
        'pageNumber' => [
            'format' => 'int32',
        ],
        'pageSize' => [
            'format' => 'int32',
        ],
    ];

    public ?int $pageNumber {
        set {
            $this->assigning('pageNumber', $value);
            $this->pageNumber = $value;
        }
    }
    public ?int $pageSize {
        set {
            $this->assigning('pageSize', $value);
            $this->pageSize = $value;
        }
    }
    public ?string $sortBy;
    public ?string $sortDirection;
}
