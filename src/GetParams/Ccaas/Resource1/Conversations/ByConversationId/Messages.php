<?php

declare(strict_types=1);

namespace InfobipSDK\GetParams\Ccaas\Resource1\Conversations\ByConversationId;

final class Messages extends \Dmorenof\SdkRuntime\DTO
{
    public const array OPERATION_FIELDS = [
    'path' => [],
    'query' => [
        'channel' => 'channel',
        'createdAfter' => 'createdAfter',
        'createdBefore' => 'createdBefore',
        'direction' => 'direction',
        'limit' => 'limit',
        'messageIds' => 'messageIds',
        'orderBy' => 'orderBy',
        'page' => 'page',
    ],
    'header' => [],
];

    protected const array VALIDATION = [
    'limit' => [
        'maximum' => 999,
    ],
    'messageIds' => [
        'items' => [
            'type' => 'string',
            'rules' => [],
        ],
    ],
];

    public ?\InfobipSDK\Enums\Ccaas\Resource1\Conversations\ByConversationId\Messages\Get\Query\QueryChannelEnum $channel;
    public ?string $createdAfter;
    public ?string $createdBefore;
    public ?\InfobipSDK\Enums\Ccaas\Resource1\Conversations\ByConversationId\Messages\Get\Query\QueryDirectionEnum $direction;
    public ?int $limit {
        set {
            $this->assigning('limit', $value);
            $this->limit = $value;
        }
    }
    /** @var list<string>|null */
    public ?array $messageIds;
    public ?string $orderBy;
    public ?int $page;
}
