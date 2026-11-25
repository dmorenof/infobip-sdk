<?php

declare(strict_types=1);

namespace InfobipSDK\Sms\Resource3\Text;

final class Query extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** GET /sms/3/text/query [operationId: send-sms-messages-over-query-parameters] */
    /**
     * Send SMS message over query parameters
     *
     * All message parameters of the message can be defined in the query string. Use this method only if [Send SMS message](#channels/sms/send-sms-messages) is not an option for your use case!<br>**Note:** Make sure that special characters are properly encoded. Use a [URL encoding reference](https://www.w3schools.com/tags/ref_urlencode.asp) as a guide. This endpoint is the successor of [Send SMS message over query parameters](#channels/sms/send-sms-message-over-query-parameters).
     * Documentation: https://www.infobip.com/docs/sms
     */
    public static function get(\InfobipSDK\GetParams\Sms\Resource3\Text\Query $params): \InfobipSDK\DTOs\N20085a4036d67f66ebf204560d55d58a7c131c15d42c8ed9442747c488e08630\SmsResponseEnvelope
    {
        return self::client()->resource(\InfobipSDK\Resources\Sms\Resource3\Text\Query::class)->get($params);
    }

}
