<?php

declare(strict_types=1);

namespace InfobipSDK\PathParams\Ccaas\Resource1\Agents\ByAgentId\Queues;

final class ByQueueId extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'agentId',
        'queueId',
    ];
    public const array OPERATION_FIELDS = [
        'path' => [
            'agentId' => 'agentId',
            'queueId' => 'queueId',
        ],
        'query' => [],
        'header' => [],
    ];

    public string $agentId;
    public string $queueId;
}
