<?php

declare(strict_types=1);

namespace InfobipSDK\GetParams\Zalo\Resource1;

final class Logs extends \Dmorenof\SdkRuntime\DTO
{
    public const array OPERATION_FIELDS = [
        'path' => [],
        'query' => [
            'from' => 'from',
            'generalStatus' => 'generalStatus',
            'limit' => 'limit',
            'messageId' => 'messageId',
            'sentSince' => 'sentSince',
            'sentUntil' => 'sentUntil',
            'to' => 'to',
        ],
        'header' => [],
    ];

    protected const array VALIDATION = [
        'limit' => [
            'minimum' => 1,
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

    public ?string $from;
    public ?\InfobipSDK\Enums\N6a8bbdacebad88e7e0de8bdfd30e29e04d114b9f00175a0482b9e26b742d85d5\IpCoreGeneralStatus $generalStatus;
    public ?int $limit {
        set {
            $this->assigning('limit', $value);
            $this->limit = $value;
        }
    }
    /** @var list<string>|null */
    public ?array $messageId;
    public ?string $sentSince;
    public ?string $sentUntil;
    public ?string $to;
}
