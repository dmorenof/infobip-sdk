<?php

declare(strict_types=1);

namespace InfobipSDK\Resources\KakaoAlim\Resource1;

final class Logs extends \InfobipSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/kakao-alim/1/logs',
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
            401 => '\\InfobipSDK\\DTOs\\Api\\Error',
            403 => '\\InfobipSDK\\DTOs\\Api\\Error',
            429 => '\\InfobipSDK\\DTOs\\Api\\Error',
            500 => '\\InfobipSDK\\DTOs\\Api\\Error',
        ],
        'errorResponses' => [
            401 => [
                'type' => '\\InfobipSDK\\DTOs\\Api\\Error',
                'schemaNullable' => false,
            ],
            403 => [
                'type' => '\\InfobipSDK\\DTOs\\Api\\Error',
                'schemaNullable' => false,
            ],
            429 => [
                'type' => '\\InfobipSDK\\DTOs\\Api\\Error',
                'schemaNullable' => false,
            ],
            500 => [
                'type' => '\\InfobipSDK\\DTOs\\Api\\Error',
                'schemaNullable' => false,
            ],
        ],
        'responseType' => '\\InfobipSDK\\DTOs\\N382231ebb2fc250c93965563ed41f4ba8228460e52f6052a582e69b931876454\\LogResponseLogKakaoAlimOutboundContent',
        'querySerialization' => [
            'bulkId' => 'multi',
            'campaignReferenceId' => 'multi',
            'messageId' => 'multi',
        ],
    ];

    /**
     * Get outbound Kakao Alim message logs
     *
     * Use this method for displaying logs for example in the user interface. Available are the logs for the last 48 hours.
     */
    public function get(?\InfobipSDK\GetParams\KakaoAlim\Resource1\Logs $params = null): \InfobipSDK\DTOs\N382231ebb2fc250c93965563ed41f4ba8228460e52f6052a582e69b931876454\LogResponseLogKakaoAlimOutboundContent
    {
        /** @var \InfobipSDK\DTOs\N382231ebb2fc250c93965563ed41f4ba8228460e52f6052a582e69b931876454\LogResponseLogKakaoAlimOutboundContent $result */
        $result = $this->executeArguments(self::operation(self::GET), parameters: $params);
        return $result;
    }

}
