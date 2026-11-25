<?php

declare(strict_types=1);

namespace InfobipSDK\PathParams\Ccaas\Voice\Resource2\Agent\ByAgentId\WrapUpTime\Add;

final class BySeconds extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'agentId',
    'seconds',
];
    public const array OPERATION_FIELDS = [
    'path' => [
        'agentId' => 'agentId',
        'seconds' => 'seconds',
    ],
    'query' => [],
    'header' => [],
];

    protected const array VALIDATION = [
    'seconds' => [
        'format' => 'int32',
    ],
];

    public string $agentId;
    public int $seconds {
        set {
            $this->assigning('seconds', $value);
            $this->seconds = $value;
        }
    }
}
