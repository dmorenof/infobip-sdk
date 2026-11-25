<?php

declare(strict_types=1);

namespace InfobipSDK\GetParams\Omni\Resource1;

final class Logs extends \Dmorenof\SdkRuntime\DTO
{
    public const array OPERATION_FIELDS = [
    'path' => [],
    'query' => [
        'bulkId' => 'bulkId',
        'channel' => 'channel',
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

    /** @var list<string>|null */
    public ?array $bulkId;
    public ?\InfobipSDK\Enums\E204fb2d0d1568cbfe90b245006e95aab18e580484154f085b8348d2e991bc11\OmniChannel $channel;
    public ?string $from;
    public ?\InfobipSDK\Enums\E204fb2d0d1568cbfe90b245006e95aab18e580484154f085b8348d2e991bc11\IpCoreGeneralStatus $generalStatus;
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
