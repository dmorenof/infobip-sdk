<?php

declare(strict_types=1);

namespace InfobipSDK\GetParams\KnowledgeBase\Resource1;

final class Articles extends \Dmorenof\SdkRuntime\DTO
{
    public const array OPERATION_FIELDS = [
        'path' => [],
        'query' => [
            'page' => 'page',
            'searchExp' => 'searchExp',
            'size' => 'size',
            'sort' => 'sort',
            'status' => 'status',
            'tag' => 'tag',
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
    public ?string $searchExp;
    public ?int $size {
        set {
            $this->assigning('size', $value);
            $this->size = $value;
        }
    }
    public ?string $sort;
    public ?\InfobipSDK\Enums\N09ef6171198229ad9a73a413d2271afa3ba31b9abbd6cd8a0cc9563fd721f1ed\WorkflowStatus $status;
    public ?string $tag;
}
