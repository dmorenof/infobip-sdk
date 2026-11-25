<?php

declare(strict_types=1);

namespace InfobipSDK\GetParams\Ccaas\Resource1;

final class Tags extends \Dmorenof\SdkRuntime\DTO
{
    public const array OPERATION_FIELDS = [
        'path' => [],
        'query' => [
            'conversationId' => 'conversationId',
            'limit' => 'limit',
            'name' => 'name',
            'orderBy' => 'orderBy',
            'page' => 'page',
        ],
        'header' => [],
    ];

    protected const array VALIDATION = [
        'limit' => [
            'maximum' => 999,
        ],
    ];

    public ?string $conversationId;
    public ?int $limit {
        set {
            $this->assigning('limit', $value);
            $this->limit = $value;
        }
    }
    public ?string $name;
    public ?string $orderBy;
    public ?int $page;
}
