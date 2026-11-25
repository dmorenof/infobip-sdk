<?php

declare(strict_types=1);

namespace InfobipSDK\Omni\Resource1;

final class Reports extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** GET /omni/1/reports [operationId: get-omni-failover-delivery-reports] */
    /**
     * Get OMNI failover delivery reports
     *
     * Get one-time delivery reports to see which channel was used to deliver the failover message.
     */
    public static function get(?\InfobipSDK\GetParams\Omni\Resource1\Reports $params = null): \InfobipSDK\DTOs\N8a2ea8872469b182f7474a94d4bf931da42a6e2a1d1ba07898b1bc7dcdc85cd2\DeliveryReports
    {
        return self::client()->resource(\InfobipSDK\Resources\Omni\Resource1\Reports::class)->get($params);
    }
}
