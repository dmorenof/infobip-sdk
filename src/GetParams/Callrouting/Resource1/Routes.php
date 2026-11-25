<?php

declare(strict_types=1);

namespace InfobipSDK\GetParams\Callrouting\Resource1;

final class Routes extends \Dmorenof\SdkRuntime\DTO
{
    public const array OPERATION_FIELDS = [
    'path' => [],
    'query' => [
        'nameContains' => 'nameContains',
        'page' => 'page',
        'size' => 'size',
    ],
    'header' => [],
];

    protected const array VALIDATION = [
    'nameContains' => [
        'maxLength' => 255,
    ],
    'page' => [
        'minimum' => 0,
        'format' => 'int32',
    ],
    'size' => [
        'minimum' => 1,
        'maximum' => 100,
        'format' => 'int32',
    ],
];

    public ?string $nameContains {
        set {
            $this->assigning('nameContains', $value);
            $this->nameContains = $value;
        }
    }
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
