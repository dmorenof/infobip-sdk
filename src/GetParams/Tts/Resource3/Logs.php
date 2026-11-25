<?php

declare(strict_types=1);

namespace InfobipSDK\GetParams\Tts\Resource3;

final class Logs extends \Dmorenof\SdkRuntime\DTO
{
    public const array OPERATION_FIELDS = [
        'path' => [],
        'query' => [
            'bulkId' => 'bulkId',
            'from' => 'from',
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
    public ?string $from;
    public ?\InfobipSDK\Enums\N13d6cf838c63455fe28fcf6ab1b4447c03d816f87ce89525d3cd759ca08a7b1a\IpCoreGeneralStatus $generalStatus;
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
