<?php

declare(strict_types=1);

namespace InfobipSDK\Resources\Voice\Resource1;

final class Reports extends \InfobipSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/voice/1/reports',
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
            401 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            403 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            '4XX' => '\\InfobipSDK\\DTOs\\N31756dca18d13ab491063defb0eba5e91f72bccd700f710f44794c6f1df9c9ea\\ApiException',
            500 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            '5XX' => '\\InfobipSDK\\DTOs\\N31756dca18d13ab491063defb0eba5e91f72bccd700f710f44794c6f1df9c9ea\\ApiException',
        ],
        'errorResponses' => [
            401 => [
                'type' => '\\InfobipSDK\\DTOs\\Api\\Exception',
                'schemaNullable' => false,
            ],
            403 => [
                'type' => '\\InfobipSDK\\DTOs\\Api\\Exception',
                'schemaNullable' => false,
            ],
            '4XX' => [
                'type' => '\\InfobipSDK\\DTOs\\N31756dca18d13ab491063defb0eba5e91f72bccd700f710f44794c6f1df9c9ea\\ApiException',
                'schemaNullable' => false,
            ],
            500 => [
                'type' => '\\InfobipSDK\\DTOs\\Api\\Exception',
                'schemaNullable' => false,
            ],
            '5XX' => [
                'type' => '\\InfobipSDK\\DTOs\\N31756dca18d13ab491063defb0eba5e91f72bccd700f710f44794c6f1df9c9ea\\ApiException',
                'schemaNullable' => false,
            ],
        ],
        'responseType' => '\\InfobipSDK\\DTOs\\N13d6cf838c63455fe28fcf6ab1b4447c03d816f87ce89525d3cd759ca08a7b1a\\ReportResponse',
    ];

    /**
     * Get Voice Delivery Reports
     *
     * This method allows you to get delivery reports for sent Voice messages, outbound IVR or Click-to-call (without notifyUrl request parameter). Delivery reports are returned only once. Additional delivery report request will return an empty collection.
     */
    public function get(?\InfobipSDK\GetParams\Voice\Resource1\Reports $params = null): \InfobipSDK\DTOs\N13d6cf838c63455fe28fcf6ab1b4447c03d816f87ce89525d3cd759ca08a7b1a\ReportResponse
    {
        /** @var \InfobipSDK\DTOs\N13d6cf838c63455fe28fcf6ab1b4447c03d816f87ce89525d3cd759ca08a7b1a\ReportResponse $result */
        $result = $this->executeArguments(self::operation(self::GET), parameters: $params);
        return $result;
    }

}
