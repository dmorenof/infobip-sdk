<?php

declare(strict_types=1);

namespace InfobipSDK\GetParams\Ccaas\Resource1;

final class Queues extends \Dmorenof\SdkRuntime\DTO
{
    public const array OPERATION_FIELDS = [
        'path' => [],
        'query' => [
            'agentId' => 'agentId',
            'limit' => 'limit',
            'name' => 'name',
            'orderBy' => 'orderBy',
            'page' => 'page',
            'queueIds' => 'queueIds',
            'workingHoursId' => 'workingHoursId',
        ],
        'header' => [],
    ];

    protected const array VALIDATION = [
        'limit' => [
            'maximum' => 999,
        ],
        'queueIds' => [
            'items' => [
                'type' => 'string',
                'rules' => [],
            ],
        ],
    ];

    public ?string $agentId;
    public ?int $limit {
        set {
            $this->assigning('limit', $value);
            $this->limit = $value;
        }
    }
    public ?string $name;
    public ?string $orderBy;
    public ?int $page;
    /** @var list<string>|null */
    public ?array $queueIds;
    public ?string $workingHoursId;
}
