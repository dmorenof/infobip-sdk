<?php

declare(strict_types=1);

namespace InfobipSDK\DeleteParams\Push\Resource1\User\ByExternalUserId\Inbox;

final class Messages extends \Dmorenof\SdkRuntime\DTO
{
    public const array OPERATION_FIELDS = [
    'path' => [],
    'query' => [
        'bulkId' => 'bulkId',
        'campaignId' => 'campaignId',
        'messageId' => 'messageId',
    ],
    'header' => [],
];

    protected const array VALIDATION = [
    'messageId' => [
        'maxItems' => 100,
        'items' => [
            'type' => 'string',
            'rules' => [],
        ],
    ],
];

    public ?string $bulkId;
    public ?string $campaignId;
    /** @var list<string>|null */
    public ?array $messageId;
}
