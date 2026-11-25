<?php

declare(strict_types=1);

namespace InfobipSDK\Sms\Resource1\Text;

final class Query extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** GET /sms/1/text/query [operationId: send-sms-message-over-query-parameters] */
    /**
     * Send SMS message over query parameters
     *
     * All message parameters of the message can be defined in the query string. Use this method only if [Send SMS message](#channels/sms/send-sms-message) is not an option for your use case!<br>**Note:** Make sure that special characters and user credentials are properly encoded. Use a [URL encoding reference](https://www.w3schools.com/tags/ref_urlencode.asp) as a guide.
     * Documentation: https://www.infobip.com/docs/sms
     *
     * @deprecated
     */
    public static function get(\InfobipSDK\GetParams\Sms\Resource1\Text\Query $params): \InfobipSDK\DTOs\Cb1ef9a380a46bb9d49281818dd22b206a7f89260670bd103daadd3abc4386a3\QuerySmsResponse
    {
        return self::client()->resource(\InfobipSDK\Resources\Sms\Resource1\Text\Query::class)->get($params);
    }

}
