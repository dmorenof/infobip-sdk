<?php

declare(strict_types=1);

namespace InfobipSDK\DeleteParams\Calls\Resource1\SipTrunks\BySipTrunkId;

final class TxtRecords extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'fqdn',
    ];
    public const array OPERATION_FIELDS = [
        'path' => [],
        'query' => [
            'fqdn' => 'fqdn',
        ],
        'header' => [],
    ];

    public string $fqdn;
}
