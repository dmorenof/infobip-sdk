<?php

declare(strict_types=1);

namespace InfobipSDK\PathParams\Calls\Resource1\Calls\ByCallId\ApplicationTransfer\ByTransferId;

final class Accept extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'callId',
        'transferId',
    ];
    public const array OPERATION_FIELDS = [
        'path' => [
            'callId' => 'callId',
            'transferId' => 'transferId',
        ],
        'query' => [],
        'header' => [],
    ];

    public string $callId;
    public string $transferId;
}
