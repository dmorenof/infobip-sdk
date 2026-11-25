<?php

declare(strict_types=1);

namespace InfobipSDK\GetParams\Audit\Resource1\Logs;

final class Export extends \Dmorenof\SdkRuntime\DTO
{
    public const array OPERATION_FIELDS = [
    'path' => [],
    'query' => [
        'action' => 'action',
        'description' => 'description',
        'from' => 'from',
        'ipAddress' => 'ipAddress',
        'item' => 'item',
        'limit' => 'limit',
        'to' => 'to',
        'userKey' => 'userKey',
    ],
    'header' => [],
];

    protected const array VALIDATION = [
    'limit' => [
        'minimum' => 1,
        'maximum' => 10000,
        'format' => 'int32',
    ],
];

    public ?\InfobipSDK\Enums\N40143f8c1273929a779db5eeca48aaeec6583ec5c7f80b29e546fbb75ba02e1d\Action $action;
    public ?string $description;
    public ?string $from;
    public ?string $ipAddress;
    public ?\InfobipSDK\Enums\N40143f8c1273929a779db5eeca48aaeec6583ec5c7f80b29e546fbb75ba02e1d\Item $item;
    public ?int $limit {
        set {
            $this->assigning('limit', $value);
            $this->limit = $value;
        }
    }
    public ?string $to;
    public ?string $userKey;
}
