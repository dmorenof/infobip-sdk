<?php

declare(strict_types=1);

namespace InfobipSDK\Sms\Resource1;

final class Logs extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** GET /sms/1/logs [operationId: get-outbound-sms-message-logs] */
    /**
     * Get outbound SMS message logs
     *
     * Use this method for displaying logs for example in the user interface. Available are the logs for the last 48 hours and you can only retrieve maximum of 1000 logs per call. See [message delivery reports](#channels/sms/get-outbound-sms-message-delivery-reports) if your use case is to verify message delivery.
     * Documentation: https://www.infobip.com/docs/sms
     *
     * @deprecated
     */
    public static function get(?\InfobipSDK\GetParams\Sms\Resource1\Logs $params = null): \InfobipSDK\DTOs\B41d7b140d24800c94ddcc7df92e32ab37fc7d5f310ce1050b04561c5e59a3b7\LogsResponse
    {
        return self::client()->resource(\InfobipSDK\Resources\Sms\Resource1\Logs::class)->get($params);
    }

}
