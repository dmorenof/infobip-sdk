<?php

declare(strict_types=1);

namespace InfobipSDK\LineOa\Resource1;

final class Logs extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** GET /line-oa/1/logs [operationId: get-outbound-line-oa-message-logs] */
    /**
     * Get outbound LINE Official Account message logs
     *
     * Use this method to display logs, for example in a user interface. Logs are available for the last 48 hours.
     * Documentation: https://www.infobip.com/docs/line
     */
    public static function get(?\InfobipSDK\GetParams\LineOa\Resource1\Logs $params = null): \InfobipSDK\DTOs\N53932f53b54839fd583eae39fe878805e79c364296f164379eb97a5f2c4b6c59\LogResponseLogLineOaOutboundContent
    {
        return self::client()->resource(\InfobipSDK\Resources\LineOa\Resource1\Logs::class)->get($params);
    }

}
