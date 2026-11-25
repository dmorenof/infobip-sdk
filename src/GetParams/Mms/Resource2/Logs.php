<?php

declare(strict_types=1);

namespace InfobipSDK\GetParams\Mms\Resource2;

final class Logs extends \Dmorenof\SdkRuntime\DTO
{
    public const array OPERATION_FIELDS = [
    'path' => [],
    'query' => [
        'applicationId' => 'applicationId',
        'bulkId' => 'bulkId',
        'campaignReferenceId' => 'campaignReferenceId',
        'cursor' => 'cursor',
        'destination' => 'destination',
        'entityId' => 'entityId',
        'generalStatus' => 'generalStatus',
        'limit' => 'limit',
        'mcc' => 'mcc',
        'messageId' => 'messageId',
        'mnc' => 'mnc',
        'sender' => 'sender',
        'sentSince' => 'sentSince',
        'sentUntil' => 'sentUntil',
        'useCursor' => 'useCursor',
    ],
    'header' => [],
];

    protected const array VALIDATION = [
    'bulkId' => [
        'items' => [
            'type' => 'string',
            'rules' => [],
        ],
    ],
    'campaignReferenceId' => [
        'items' => [
            'type' => 'string',
            'rules' => [],
        ],
    ],
    'limit' => [
        'maximum' => 1000,
        'format' => 'int32',
    ],
    'messageId' => [
        'items' => [
            'type' => 'string',
            'rules' => [],
        ],
    ],
];

    public ?string $applicationId;
    /** @var list<string>|null */
    public ?array $bulkId;
    /** @var list<string>|null */
    public ?array $campaignReferenceId;
    public ?string $cursor;
    public ?string $destination;
    public ?string $entityId;
    public ?\InfobipSDK\Enums\Faad2f34157fead7bc36bdf18ea6d8be6674c0ceb93de05135894a2bf0f2aa1b\MessageGeneralStatus $generalStatus;
    public ?int $limit {
        set {
            $this->assigning('limit', $value);
            $this->limit = $value;
        }
    }
    public ?string $mcc;
    /** @var list<string>|null */
    public ?array $messageId;
    public ?string $mnc;
    public ?string $sender;
    public ?string $sentSince;
    public ?string $sentUntil;
    public ?bool $useCursor;
}
