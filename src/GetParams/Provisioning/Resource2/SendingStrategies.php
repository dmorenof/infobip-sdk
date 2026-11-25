<?php

declare(strict_types=1);

namespace InfobipSDK\GetParams\Provisioning\Resource2;

final class SendingStrategies extends \Dmorenof\SdkRuntime\DTO
{
    public const array OPERATION_FIELDS = [
    'path' => [],
    'query' => [
        'applicationId' => 'applicationId',
        'entityId' => 'entityId',
        'page' => 'page',
        'sendingStrategyId' => 'sendingStrategyId',
        'size' => 'size',
    ],
    'header' => [],
];

    protected const array VALIDATION = [
    'page' => [
        'minimum' => 0,
    ],
    'size' => [
        'minimum' => 1,
        'maximum' => 1000,
    ],
];

    public ?string $applicationId;
    public ?string $entityId;
    public ?int $page {
        set {
            $this->assigning('page', $value);
            $this->page = $value;
        }
    }
    public ?string $sendingStrategyId;
    public ?int $size {
        set {
            $this->assigning('size', $value);
            $this->size = $value;
        }
    }
}
