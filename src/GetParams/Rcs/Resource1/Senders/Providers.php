<?php

declare(strict_types=1);

namespace InfobipSDK\GetParams\Rcs\Resource1\Senders;

final class Providers extends \Dmorenof\SdkRuntime\DTO
{
    public const array OPERATION_FIELDS = [
        'path' => [],
        'query' => [
            'countryCode' => 'countryCode',
            'page' => 'page',
            'pageSize' => 'pageSize',
            'sortDirection' => 'sortDirection',
        ],
        'header' => [],
    ];

    protected const array VALIDATION = [
        'page' => [
            'format' => 'int32',
        ],
        'pageSize' => [
            'format' => 'int32',
        ],
    ];

    public ?string $countryCode;
    public ?int $page {
        set {
            $this->assigning('page', $value);
            $this->page = $value;
        }
    }
    public ?int $pageSize {
        set {
            $this->assigning('pageSize', $value);
            $this->pageSize = $value;
        }
    }
    public ?string $sortDirection;
}
