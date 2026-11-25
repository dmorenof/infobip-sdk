<?php

declare(strict_types=1);

namespace InfobipSDK\Email\Resource1\IpManagement;

final class Ips extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** GET /email/1/ip-management/ips [operationId: get-all-ips] */
    /**
     * Get IPs
     *
     * Returns all the dedicated IP addresses owned by this account.
     */
    public static function get(): \InfobipSDK\Collections\Email\Resource1\IpManagement\Ips\Get\IpManagementIpsCollection
    {
        return self::client()->resource(\InfobipSDK\Resources\Email\Resource1\IpManagement\Ips::class)->get();
    }

    /** DELETE /email/1/ip-management/ips/{ipId} [operationId: decommission-ip] */
    /**
     * Decommission IP
     *
     * Decommission a Dedicated IP
     * Once a dedicated IP is decommissioned, billing for that IP will end at the start of the next billing cycle (on the 1st of the following month). For accounts with Disaster Recovery enabled in the US and EU regions, paired dedicated IPs will be decommissioned together.
     *
     */
    public static function deleteByIpId(string $ipId): void
    {
        self::client()->resource(\InfobipSDK\Resources\Email\Resource1\IpManagement\Ips::class)->deleteByIpId($ipId);
    }

    /** GET /email/1/ip-management/ips/{ipId} [operationId: get-ip-details] */
    /**
     * Get IP
     *
     * Get detailed information about provided dedicated IP.
     */
    public static function getByIpId(string $ipId): \InfobipSDK\DTOs\N61cea6785aa06882a92b0d6cc8c922ce1d44b92bfbdfd6cde0df0f73fb2499d6\IpDetailResponse
    {
        return self::client()->resource(\InfobipSDK\Resources\Email\Resource1\IpManagement\Ips::class)->getByIpId($ipId);
    }
}
