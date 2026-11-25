<?php

declare(strict_types=1);

namespace InfobipSDK\GetParams\Voice\RinglessVoicemail\Resource1;

final class Reports extends \Dmorenof\SdkRuntime\DTO
{
    public const array OPERATION_FIELDS = [
    'path' => [],
    'query' => [
        'bulkId' => 'bulkId',
        'limit' => 'limit',
        'messageId' => 'messageId',
    ],
    'header' => [],
];

    protected const array VALIDATION = [
    'limit' => [
        'minimum' => 1,
        'maximum' => 1000,
    ],
];

    public ?string $bulkId;
    public ?int $limit {
        set {
            $this->assigning('limit', $value);
            $this->limit = $value;
        }
    }
    public ?string $messageId;
}
