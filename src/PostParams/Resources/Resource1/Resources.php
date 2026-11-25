<?php

declare(strict_types=1);

namespace InfobipSDK\PostParams\Resources\Resource1;

final class Resources extends \Dmorenof\SdkRuntime\DTO
{
    public const array OPERATION_FIELDS = [
    'path' => [],
    'query' => [
        'page' => 'page',
        'size' => 'size',
    ],
    'header' => [],
];

    public const bool OPERATION_BODY = true;

    protected const array VALIDATION = [
    'page' => [
        'minimum' => 0,
        'format' => 'int32',
    ],
    'size' => [
        'minimum' => 1,
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
    public ?\InfobipSDK\DTOs\N7c77a2c703ce12a601f120565936de62cf48d1baf9232d5411f82fc339353553\IbResourcesFilter $body;
}
