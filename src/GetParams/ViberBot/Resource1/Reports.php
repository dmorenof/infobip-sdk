<?php

declare(strict_types=1);

namespace InfobipSDK\GetParams\ViberBot\Resource1;

final class Reports extends \Dmorenof\SdkRuntime\DTO
{
    public const array OPERATION_FIELDS = [
    'path' => [],
    'query' => [
        'applicationId' => 'applicationId',
        'bulkId' => 'bulkId',
        'campaignReferenceId' => 'campaignReferenceId',
        'entityId' => 'entityId',
        'limit' => 'limit',
        'messageId' => 'messageId',
    ],
    'header' => [],
];

    protected const array VALIDATION = [
    'limit' => [
        'maximum' => 1000,
        'format' => 'int32',
    ],
];

    public ?string $applicationId;
    public ?string $bulkId;
    public ?string $campaignReferenceId;
    public ?string $entityId;
    public ?int $limit {
        set {
            $this->assigning('limit', $value);
            $this->limit = $value;
        }
    }
    public ?string $messageId;
}
