<?php

declare(strict_types=1);

namespace InfobipSDK\Email\Resource1\IpManagement\Paginated;

final class Pools extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** GET /email/1/ip-management/paginated/pools [operationId: get-all-ip-pools-paginated] */
    /**
     * Get IP pools (paginated)
     *
     * Returns paginated IP pools owned by this account.
     */
    public static function get(?\InfobipSDK\GetParams\Email\Resource1\IpManagement\Paginated\Pools $params = null): \InfobipSDK\Responses\Email\Resource1\IpManagement\Paginated\Pools\Get
    {
        return self::client()->resource(\InfobipSDK\Resources\Email\Resource1\IpManagement\Paginated\Pools::class)->get($params);
    }

}
