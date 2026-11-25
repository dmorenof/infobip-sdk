<?php

declare(strict_types=1);

namespace InfobipSDK\GetParams\MessagesApi\Resource1;

final class Reports extends \Dmorenof\SdkRuntime\DTO
{
    public const array OPERATION_FIELDS = [
    'path' => [],
    'query' => [
        'applicationId' => 'applicationId',
        'bulkId' => 'bulkId',
        'campaignReferenceId' => 'campaignReferenceId',
        'channel' => 'channel',
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
    public ?\InfobipSDK\Enums\N899caf445aab842b03fe1d74e4afd7097f0161dae66538ffa05bba2f153d708f\Channel $channel;
    public ?string $entityId;
    public ?int $limit {
        set {
            $this->assigning('limit', $value);
            $this->limit = $value;
        }
    }
    public ?string $messageId;
}
