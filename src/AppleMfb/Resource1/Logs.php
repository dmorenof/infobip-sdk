<?php

declare(strict_types=1);

namespace InfobipSDK\AppleMfb\Resource1;

final class Logs extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** GET /apple-mfb/1/logs [operationId: get-outbound-apple-mfb-message-logs] */
    /**
     * Get message logs
     *
     * Use this method for displaying logs for example in the user interface. Available are the logs for the last 48 hours.
     */
    public static function get(?\InfobipSDK\GetParams\AppleMfb\Resource1\Logs $params = null): \InfobipSDK\DTOs\N91c858d6e55640d2b6750e23f7ec3df534ca8bee928e5f9b25341eaf73842f14\LogResponseLogAppleMfbOutboundContent
    {
        return self::client()->resource(\InfobipSDK\Resources\AppleMfb\Resource1\Logs::class)->get($params);
    }
}
