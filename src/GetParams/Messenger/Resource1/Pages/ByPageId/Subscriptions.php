<?php

declare(strict_types=1);

namespace InfobipSDK\GetParams\Messenger\Resource1\Pages\ByPageId;

final class Subscriptions extends \Dmorenof\SdkRuntime\DTO
{
    public const array OPERATION_FIELDS = [
    'path' => [],
    'query' => [
        'cursor' => 'cursor',
        'customAudienceIds' => 'customAudienceIds',
        'limit' => 'limit',
        'useCursor' => 'useCursor',
    ],
    'header' => [],
];

    protected const array VALIDATION = [
    'customAudienceIds' => [
        'items' => [
            'type' => 'string',
            'rules' => [],
        ],
    ],
    'limit' => [
        'minimum' => 1,
        'maximum' => 1000,
        'format' => 'int32',
    ],
];

    public ?string $cursor;
    /** @var list<string>|null */
    public ?array $customAudienceIds;
    public ?int $limit {
        set {
            $this->assigning('limit', $value);
            $this->limit = $value;
        }
    }
    public ?bool $useCursor;
}
