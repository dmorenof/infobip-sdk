<?php

declare(strict_types=1);

namespace InfobipSDK\GetParams\Number\Resource1;

final class Logs extends \Dmorenof\SdkRuntime\DTO
{
    public const array OPERATION_FIELDS = [
        'path' => [],
        'query' => [
            'bulkId' => 'bulkId',
            'generalStatus' => 'generalStatus',
            'limit' => 'limit',
            'mcc' => 'mcc',
            'messageId' => 'messageId',
            'mnc' => 'mnc',
            'sentSince' => 'sentSince',
            'sentUntil' => 'sentUntil',
            'to' => 'to',
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
        'limit' => [
            'minimum' => 0,
            'exclusiveMinimum' => 0,
            'format' => 'int32',
        ],
        'messageId' => [
            'items' => [
                'type' => 'string',
                'rules' => [],
            ],
        ],
    ];

    /** @var list<string>|null */
    public ?array $bulkId;
    public ?\InfobipSDK\Enums\N20085a4036d67f66ebf204560d55d58a7c131c15d42c8ed9442747c488e08630\MessageGeneralStatus $generalStatus;
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
    public ?string $sentSince;
    public ?string $sentUntil;
    public ?string $to;
}
