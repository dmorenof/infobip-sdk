<?php

declare(strict_types=1);

namespace InfobipSDK\GetParams\NumberReputation\Resource1\Businesses\ByBusinessId\Numbers;

final class Jobs extends \Dmorenof\SdkRuntime\DTO
{
    public const array OPERATION_FIELDS = [
    'path' => [],
    'query' => [
        'jobName' => 'jobName',
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

    public ?string $jobName;
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
