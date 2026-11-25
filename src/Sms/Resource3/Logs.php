<?php

declare(strict_types=1);

namespace InfobipSDK\Sms\Resource3;

final class Logs extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** GET /sms/3/logs [operationId: get-outbound-sms-message-logs-v3] */
    /**
     * Get outbound SMS message logs
     *
     * Use this method to obtain the logs associated with outbound messages. The available logs are limited to those generated in the last 48 hours, and you can retrieve a maximum of only 1000 logs per call. See [message delivery reports](#channels/sms/get-outbound-sms-message-delivery-reports-v3) if your use case is to verify message delivery.
     * Documentation: https://www.infobip.com/docs/sms
     */
    public static function get(?\InfobipSDK\GetParams\Sms\Resource3\Logs $params = null): \InfobipSDK\DTOs\N20085a4036d67f66ebf204560d55d58a7c131c15d42c8ed9442747c488e08630\LogResponseSmsLogSmsMessageContent
    {
        return self::client()->resource(\InfobipSDK\Resources\Sms\Resource3\Logs::class)->get($params);
    }
}
