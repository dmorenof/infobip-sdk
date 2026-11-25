<?php

declare(strict_types=1);

namespace InfobipSDK\GetParams\Email\Resource1;

final class Logs extends \Dmorenof\SdkRuntime\DTO
{
    public const array OPERATION_FIELDS = [
    'path' => [],
    'query' => [
        'applicationId' => 'applicationId',
        'bulkId' => 'bulkId',
        'campaignReferenceId' => 'campaignReferenceId',
        'cursor' => 'cursor',
        'entityId' => 'entityId',
        'from' => 'from',
        'generalStatus' => 'generalStatus',
        'limit' => 'limit',
        'messageId' => 'messageId',
        'sentSince' => 'sentSince',
        'sentUntil' => 'sentUntil',
        'to' => 'to',
        'useCursor' => 'useCursor',
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
    public ?string $cursor;
    public ?string $entityId;
    public ?string $from;
    public ?string $generalStatus;
    public ?int $limit {
        set {
            $this->assigning('limit', $value);
            $this->limit = $value;
        }
    }
    public ?string $messageId;
    public ?string $sentSince;
    public ?string $sentUntil;
    public ?string $to;
    public ?bool $useCursor;
}
