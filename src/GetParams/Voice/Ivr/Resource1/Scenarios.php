<?php

declare(strict_types=1);

namespace InfobipSDK\GetParams\Voice\Ivr\Resource1;

final class Scenarios extends \Dmorenof\SdkRuntime\DTO
{
    public const array OPERATION_FIELDS = [
        'path' => [],
        'query' => [
            'label' => 'label',
            'lastUsageDateSince' => 'lastUsageDateSince',
            'lastUsageDateUntil' => 'lastUsageDateUntil',
            'name' => 'name',
            'page' => 'page',
            'pageSize' => 'pageSize',
        ],
        'header' => [],
    ];

    protected const array VALIDATION = [
        'page' => [
            'minimum' => 1,
            'format' => 'int32',
        ],
        'pageSize' => [
            'minimum' => 1,
            'maximum' => 50,
            'format' => 'int32',
        ],
    ];

    public ?string $label;
    public ?string $lastUsageDateSince;
    public ?string $lastUsageDateUntil;
    public ?string $name;
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
}
