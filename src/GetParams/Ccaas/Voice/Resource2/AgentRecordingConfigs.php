<?php

declare(strict_types=1);

namespace InfobipSDK\GetParams\Ccaas\Voice\Resource2;

final class AgentRecordingConfigs extends \Dmorenof\SdkRuntime\DTO
{
    public const array OPERATION_FIELDS = [
        'path' => [],
        'query' => [
            'agentIds' => 'agentIds',
        ],
        'header' => [],
    ];

    public ?string $agentIds;
}
