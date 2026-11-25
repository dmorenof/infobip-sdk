<?php

declare(strict_types=1);

namespace InfobipSDK\PathParams\Email\Resource1\IpManagement\Domains\ByDomainId\Pools;

final class ByPoolId extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'domainId',
    'poolId',
];
    public const array OPERATION_FIELDS = [
    'path' => [
        'domainId' => 'domainId',
        'poolId' => 'poolId',
    ],
    'query' => [],
    'header' => [],
];

    protected const array VALIDATION = [
    'domainId' => [
        'minimum' => 1,
    ],
];

    public int $domainId {
        set {
            $this->assigning('domainId', $value);
            $this->domainId = $value;
        }
    }
    public string $poolId;
}
