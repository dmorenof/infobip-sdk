<?php

declare(strict_types=1);

namespace InfobipSDK\GetParams\Omni\Resource1;

final class Reports extends \Dmorenof\SdkRuntime\DTO
{
    public const array OPERATION_FIELDS = [
    'path' => [],
    'query' => [
        'bulkId' => 'bulkId',
        'channel' => 'channel',
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

    public ?string $bulkId;
    public ?\InfobipSDK\Enums\E204fb2d0d1568cbfe90b245006e95aab18e580484154f085b8348d2e991bc11\OmniChannel $channel;
    public ?int $limit {
        set {
            $this->assigning('limit', $value);
            $this->limit = $value;
        }
    }
    public ?string $messageId;
}
