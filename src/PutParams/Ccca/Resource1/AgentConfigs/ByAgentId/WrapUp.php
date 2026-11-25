<?php

declare(strict_types=1);

namespace InfobipSDK\PutParams\Ccca\Resource1\AgentConfigs\ByAgentId;

final class WrapUp extends \Dmorenof\SdkRuntime\DTO
{
    public const array OPERATION_FIELDS = [
    'path' => [],
    'query' => [
        'wrapUpSeconds' => 'wrapUpSeconds',
    ],
    'header' => [],
];

    public const bool OPERATION_BODY = true;

    protected const array VALIDATION = [
    'wrapUpSeconds' => [
        'minimum' => 0,
        'format' => 'int32',
    ],
];

    public ?int $wrapUpSeconds {
        set {
            $this->assigning('wrapUpSeconds', $value);
            $this->wrapUpSeconds = $value;
        }
    }
    public ?\InfobipSDK\DTOs\B979cda441a7c661201042835d7dc18eaec3fa68a2905164912469051f8b8866\AgentConfigWrapUpApiModel $body;
}
