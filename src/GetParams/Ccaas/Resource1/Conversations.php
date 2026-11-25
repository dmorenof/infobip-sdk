<?php

declare(strict_types=1);

namespace InfobipSDK\GetParams\Ccaas\Resource1;

final class Conversations extends \Dmorenof\SdkRuntime\DTO
{
    public const array OPERATION_FIELDS = [
    'path' => [],
    'query' => [
        'agentId' => 'agentId',
        'closedAfter' => 'closedAfter',
        'closedBefore' => 'closedBefore',
        'conversationIds' => 'conversationIds',
        'createdAfter' => 'createdAfter',
        'createdBefore' => 'createdBefore',
        'limit' => 'limit',
        'orderBy' => 'orderBy',
        'page' => 'page',
        'priority' => 'priority',
        'queueIds' => 'queueIds',
        'status' => 'status',
        'tagNames' => 'tagNames',
        'updatedAfter' => 'updatedAfter',
        'updatedBefore' => 'updatedBefore',
    ],
    'header' => [],
];

    protected const array VALIDATION = [
    'conversationIds' => [
        'items' => [
            'type' => 'string',
            'rules' => [],
        ],
    ],
    'limit' => [
        'maximum' => 999,
    ],
    'queueIds' => [
        'items' => [
            'type' => 'string',
            'rules' => [],
        ],
    ],
    'tagNames' => [
        'items' => [
            'type' => 'string',
            'rules' => [],
        ],
    ],
];

    public ?string $agentId;
    public ?string $closedAfter;
    public ?string $closedBefore;
    /** @var list<string>|null */
    public ?array $conversationIds;
    public ?string $createdAfter;
    public ?string $createdBefore;
    public ?int $limit {
        set {
            $this->assigning('limit', $value);
            $this->limit = $value;
        }
    }
    public ?string $orderBy;
    public ?int $page;
    public ?\InfobipSDK\Enums\Ccaas\Resource1\Conversations\Get\Query\QueryPriorityEnum $priority;
    /** @var list<string>|null */
    public ?array $queueIds;
    public ?\InfobipSDK\Enums\Ccaas\Resource1\Conversations\Get\Query\QueryStatusEnum $status;
    /** @var list<string>|null */
    public ?array $tagNames;
    public ?string $updatedAfter;
    public ?string $updatedBefore;
}
