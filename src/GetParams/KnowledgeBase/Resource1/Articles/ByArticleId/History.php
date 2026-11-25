<?php

declare(strict_types=1);

namespace InfobipSDK\GetParams\KnowledgeBase\Resource1\Articles\ByArticleId;

final class History extends \Dmorenof\SdkRuntime\DTO
{
    public const array OPERATION_FIELDS = [
    'path' => [],
    'query' => [
        'page' => 'page',
        'size' => 'size',
        'sort' => 'sort',
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
        'maximum' => 5000,
        'format' => 'int32',
    ],
];

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
    public ?string $sort;
}
