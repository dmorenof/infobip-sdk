<?php

declare(strict_types=1);

namespace InfobipSDK\Omni\Resource1;

final class Logs extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** GET /omni/1/logs [operationId: get-omni-failover-message-logs] */
    /**
     * Get OMNI failover message logs
     *
     * If you need to show message logs in some GUI use this method. For message delivery status use [OMNI failover delivery reports](#programmable-communications/omni-failover/get-omni-failover-delivery-reports).
     */
    public static function get(?\InfobipSDK\GetParams\Omni\Resource1\Logs $params = null): \InfobipSDK\DTOs\N1bf84e5ebfeebf0839825dcb3ba7bdfe29e9008eef02919c0c668629628db19e\OmniLogsResponse
    {
        return self::client()->resource(\InfobipSDK\Resources\Omni\Resource1\Logs::class)->get($params);
    }

}
