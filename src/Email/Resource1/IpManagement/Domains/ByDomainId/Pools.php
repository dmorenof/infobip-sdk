<?php

declare(strict_types=1);

namespace InfobipSDK\Email\Resource1\IpManagement\Domains\ByDomainId;

final class Pools extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** POST /email/1/ip-management/domains/{domainId}/pools [operationId: assign-pool-to-domain] */
    /**
     * Assign IP pool to domain
     *
     * Assign an IP pool to the provided domain.
     */
    public static function post(int $domainId, \InfobipSDK\DTOs\N61cea6785aa06882a92b0d6cc8c922ce1d44b92bfbdfd6cde0df0f73fb2499d6\DomainIpPoolAssignApiRequest $payload): void
    {
        self::client()->resource(\InfobipSDK\Resources\Email\Resource1\IpManagement\Domains\ByDomainId\Pools::class)->post($domainId, $payload);
    }

    /** DELETE /email/1/ip-management/domains/{domainId}/pools/{poolId} [operationId: remove-ip-pool-from-domain] */
    /**
     * Unassign IP pool from domain
     *
     * Unassign a specified pool from the provided domain.
     */
    public static function deleteByPoolId(\InfobipSDK\PathParams\Email\Resource1\IpManagement\Domains\ByDomainId\Pools\ByPoolId $identifier): void
    {
        self::client()->resource(\InfobipSDK\Resources\Email\Resource1\IpManagement\Domains\ByDomainId\Pools::class)->deleteByPoolId($identifier);
    }

    /** PUT /email/1/ip-management/domains/{domainId}/pools/{poolId} [operationId: update-domain-pool-priority] */
    /**
     * Update IP pool sending priority
     *
     * Update specified pool's sending priority for the provided domain.
     */
    public static function putByPoolId(\InfobipSDK\PathParams\Email\Resource1\IpManagement\Domains\ByDomainId\Pools\ByPoolId $identifier, \InfobipSDK\DTOs\N61cea6785aa06882a92b0d6cc8c922ce1d44b92bfbdfd6cde0df0f73fb2499d6\DomainIpPoolUpdateApiRequest $payload): void
    {
        self::client()->resource(\InfobipSDK\Resources\Email\Resource1\IpManagement\Domains\ByDomainId\Pools::class)->putByPoolId($identifier, $payload);
    }

}
