<?php

declare(strict_types=1);

namespace InfobipSDK\PathParams\Email\Resource1\IpManagement\Pools\ByPoolId\Ips;

final class ByIpId extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'ipId',
    'poolId',
];
    public const array OPERATION_FIELDS = [
    'path' => [
        'ipId' => 'ipId',
        'poolId' => 'poolId',
    ],
    'query' => [],
    'header' => [],
];

    public string $ipId;
    public string $poolId;
}
