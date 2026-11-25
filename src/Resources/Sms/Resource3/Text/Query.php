<?php

declare(strict_types=1);

namespace InfobipSDK\Resources\Sms\Resource3\Text;

final class Query extends \InfobipSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/sms/3/text/query',
        'security' => [
            [
                'OAuth2' => [],
            ],
            [
                'IBSSOTokenHeader' => [],
            ],
            [
                'APIKeyHeader' => [],
            ],
            [
                'Basic' => [],
            ],
        ],
        'errors' => [
            400 => '\\InfobipSDK\\DTOs\\Api\\Error',
            401 => '\\InfobipSDK\\DTOs\\Api\\Error',
            403 => '\\InfobipSDK\\DTOs\\Api\\Error',
            500 => '\\InfobipSDK\\DTOs\\Api\\Error',
        ],
        'errorResponses' => [
            400 => [
                'type' => '\\InfobipSDK\\DTOs\\Api\\Error',
                'schemaNullable' => false,
            ],
            401 => [
                'type' => '\\InfobipSDK\\DTOs\\Api\\Error',
                'schemaNullable' => false,
            ],
            403 => [
                'type' => '\\InfobipSDK\\DTOs\\Api\\Error',
                'schemaNullable' => false,
            ],
            500 => [
                'type' => '\\InfobipSDK\\DTOs\\Api\\Error',
                'schemaNullable' => false,
            ],
        ],
        'responseType' => '\\InfobipSDK\\DTOs\\N20085a4036d67f66ebf204560d55d58a7c131c15d42c8ed9442747c488e08630\\SmsResponseEnvelope',
        'querySerialization' => [
            'to' => 'multi',
        ],
    ];

    /**
     * Send SMS message over query parameters
     *
     * All message parameters of the message can be defined in the query string. Use this method only if [Send SMS message](#channels/sms/send-sms-messages) is not an option for your use case!<br>**Note:** Make sure that special characters are properly encoded. Use a [URL encoding reference](https://www.w3schools.com/tags/ref_urlencode.asp) as a guide. This endpoint is the successor of [Send SMS message over query parameters](#channels/sms/send-sms-message-over-query-parameters).
     * Documentation: https://www.infobip.com/docs/sms
     */
    public function get(\InfobipSDK\GetParams\Sms\Resource3\Text\Query $params): \InfobipSDK\DTOs\N20085a4036d67f66ebf204560d55d58a7c131c15d42c8ed9442747c488e08630\SmsResponseEnvelope
    {
        /** @var \InfobipSDK\DTOs\N20085a4036d67f66ebf204560d55d58a7c131c15d42c8ed9442747c488e08630\SmsResponseEnvelope $result */
        $result = $this->executeArguments(self::operation(self::GET), parameters: $params);
        return $result;
    }
}
