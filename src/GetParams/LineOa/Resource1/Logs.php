<?php

declare(strict_types=1);

namespace InfobipSDK\GetParams\LineOa\Resource1;

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
            'messageId' => 'messageId',
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
    public ?\InfobipSDK\Enums\N53932f53b54839fd583eae39fe878805e79c364296f164379eb97a5f2c4b6c59\MessageGeneralStatus $generalStatus;
    public ?int $limit {
        set {
            $this->assigning('limit', $value);
            $this->limit = $value;
        }
    }
    /** @var list<string>|null */
    public ?array $messageId;
    public ?string $sender;
    public ?string $sentSince;
    public ?string $sentUntil;
    public ?bool $useCursor;
}
