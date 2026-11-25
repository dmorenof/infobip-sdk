<?php

declare(strict_types=1);

namespace InfobipSDK\GetParams\Mms\Resource1\Inbox;

final class Reports extends \Dmorenof\SdkRuntime\DTO
{
    public const array OPERATION_FIELDS = [
        'path' => [],
        'query' => [
            'applicationId' => 'applicationId',
            'entityId' => 'entityId',
            'limit' => 'limit',
        ],
        'header' => [],
    ];

    protected const array VALIDATION = [
        'limit' => [
            'format' => 'int32',
        ],
    ];

    public ?string $applicationId;
    public ?string $entityId;
    public ?int $limit {
        set {
            $this->assigning('limit', $value);
            $this->limit = $value;
        }
    }
}
