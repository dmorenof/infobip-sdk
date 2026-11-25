<?php

declare(strict_types=1);

namespace InfobipSDK\GetParams\Subscriptions\Resource1;

final class Certificates extends \Dmorenof\SdkRuntime\DTO
{
    public const array OPERATION_FIELDS = [
        'path' => [],
        'query' => [
            'direction' => 'direction',
            'page' => 'page',
            'search' => 'search',
            'size' => 'size',
            'sortBy' => 'sortBy',
        ],
        'header' => [],
    ];

    protected const array VALIDATION = [
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

    public ?\InfobipSDK\Enums\N6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f\SortDirection $direction;
    public ?int $page {
        set {
            $this->assigning('page', $value);
            $this->page = $value;
        }
    }
    public ?string $search;
    public ?int $size {
        set {
            $this->assigning('size', $value);
            $this->size = $value;
        }
    }
    public ?\InfobipSDK\Enums\N6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f\CertificatesSortType $sortBy;
}
