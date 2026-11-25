<?php

declare(strict_types=1);

namespace InfobipSDK\Email\Resource1\IpManagement;

final class Domains extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** GET /email/1/ip-management/domains/{domainId} [operationId: get-ip-domain] */
    /**
     * Get domain
     *
     * Get detailed information for provided domain such as assigned pools and their IPs.
     */
    public static function getByDomainId(int $domainId): \InfobipSDK\DTOs\N61cea6785aa06882a92b0d6cc8c922ce1d44b92bfbdfd6cde0df0f73fb2499d6\IpDomainResponse
    {
        return self::client()->resource(\InfobipSDK\Resources\Email\Resource1\IpManagement\Domains::class)->getByDomainId($domainId);
    }
}
