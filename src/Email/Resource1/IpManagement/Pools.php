<?php

declare(strict_types=1);

namespace InfobipSDK\Email\Resource1\IpManagement;

final class Pools extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** GET /email/1/ip-management/pools [operationId: get-ip-pools] */
    /**
     * Get IP pools
     *
     * Returns all the pools that are owned (created) by this account.
     */
    public static function get(?\InfobipSDK\GetParams\Email\Resource1\IpManagement\Pools $params = null): \InfobipSDK\Collections\Email\Resource1\IpManagement\Paginated\Pools\Get\PoolsResultsCollection
    {
        return self::client()->resource(\InfobipSDK\Resources\Email\Resource1\IpManagement\Pools::class)->get($params);
    }

    /** POST /email/1/ip-management/pools [operationId: create-ip-pool] */
    /**
     * Create IP pool
     *
     * Create a new IP pool.
     */
    public static function post(\InfobipSDK\DTOs\N61cea6785aa06882a92b0d6cc8c922ce1d44b92bfbdfd6cde0df0f73fb2499d6\IpPoolCreateApiRequest $payload): \InfobipSDK\DTOs\N61cea6785aa06882a92b0d6cc8c922ce1d44b92bfbdfd6cde0df0f73fb2499d6\IpPoolResponse
    {
        return self::client()->resource(\InfobipSDK\Resources\Email\Resource1\IpManagement\Pools::class)->post($payload);
    }

    /** DELETE /email/1/ip-management/pools/{poolId} [operationId: delete-ip-pool] */
    /**
     * Delete IP pool
     *
     * Delete provided IP pool. Deleting an IP pool also deletes any assigned IPs and any assignments to domains.
     */
    public static function deleteByPoolId(string $poolId): void
    {
        self::client()->resource(\InfobipSDK\Resources\Email\Resource1\IpManagement\Pools::class)->deleteByPoolId($poolId);
    }

    /** GET /email/1/ip-management/pools/{poolId} [operationId: get-ip-pool] */
    /**
     * Get IP pool
     *
     * Get detailed information about a provided IP pool.
     */
    public static function getByPoolId(string $poolId): \InfobipSDK\DTOs\N61cea6785aa06882a92b0d6cc8c922ce1d44b92bfbdfd6cde0df0f73fb2499d6\IpPoolDetailResponse
    {
        return self::client()->resource(\InfobipSDK\Resources\Email\Resource1\IpManagement\Pools::class)->getByPoolId($poolId);
    }

    /** PUT /email/1/ip-management/pools/{poolId} [operationId: update-ip-pool] */
    /**
     * Update IP pool
     *
     * Update a provided IP pool.
     */
    public static function putByPoolId(string $poolId, \InfobipSDK\DTOs\N61cea6785aa06882a92b0d6cc8c922ce1d44b92bfbdfd6cde0df0f73fb2499d6\IpPoolCreateApiRequest $payload): \InfobipSDK\DTOs\N61cea6785aa06882a92b0d6cc8c922ce1d44b92bfbdfd6cde0df0f73fb2499d6\IpPoolResponse
    {
        return self::client()->resource(\InfobipSDK\Resources\Email\Resource1\IpManagement\Pools::class)->putByPoolId($poolId, $payload);
    }
}
