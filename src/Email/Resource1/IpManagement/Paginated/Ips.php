<?php

declare(strict_types=1);

namespace InfobipSDK\Email\Resource1\IpManagement\Paginated;

final class Ips extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** GET /email/1/ip-management/paginated/ips [operationId: get-all-ips-paginated] */
    /**
     * Get IPs (paginated)
     *
     * Returns paginated dedicated IP addresses owned by this account.
     */
    public static function get(?\InfobipSDK\GetParams\Email\Resource1\IpManagement\Paginated\Ips $params = null): \InfobipSDK\Responses\Email\Resource1\IpManagement\Paginated\Ips\Get
    {
        return self::client()->resource(\InfobipSDK\Resources\Email\Resource1\IpManagement\Paginated\Ips::class)->get($params);
    }
}
