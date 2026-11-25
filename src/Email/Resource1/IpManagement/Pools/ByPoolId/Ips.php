<?php

declare(strict_types=1);

namespace InfobipSDK\Email\Resource1\IpManagement\Pools\ByPoolId;

final class Ips extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** POST /email/1/ip-management/pools/{poolId}/ips [operationId: assign-ip-to-pool] */
    /**
     * Assign IP to pool
     *
     * Assign provided dedicated IP to the provided IP pool.
     */
    public static function post(string $poolId, \InfobipSDK\DTOs\N61cea6785aa06882a92b0d6cc8c922ce1d44b92bfbdfd6cde0df0f73fb2499d6\IpPoolAssignIpApiRequest $payload): void
    {
        self::client()->resource(\InfobipSDK\Resources\Email\Resource1\IpManagement\Pools\ByPoolId\Ips::class)->post($poolId, $payload);
    }

    /** DELETE /email/1/ip-management/pools/{poolId}/ips/{ipId} [operationId: remove-ip-from-pool] */
    /**
     * Unassign IP from pool
     *
     * Unassign provided IP from the specific pool.
     */
    public static function deleteByIpId(\InfobipSDK\PathParams\Email\Resource1\IpManagement\Pools\ByPoolId\Ips\ByIpId $identifier): void
    {
        self::client()->resource(\InfobipSDK\Resources\Email\Resource1\IpManagement\Pools\ByPoolId\Ips::class)->deleteByIpId($identifier);
    }

}
