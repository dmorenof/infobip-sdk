<?php

declare(strict_types=1);

namespace InfobipSDK\Resources\Tts\Resource3;

final class Reports extends \InfobipSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/tts/3/reports',
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
        'responseType' => '\\InfobipSDK\\DTOs\\N13d6cf838c63455fe28fcf6ab1b4447c03d816f87ce89525d3cd759ca08a7b1a\\VoiceReportResponse',
    ];

    /**
     * Get Voice Delivery Reports
     *
     * This version is deprecated as of July 1st 2020, meaning no fixes/updates will be provided and no new parameters will be added.
     *
     *
     * "We strongly advise you to update to new [delivery report method](https://www.infobip.com/docs/api/channels/voice/voice-reports-and-logs/get-voice-delivery-reports).
     *
     *
     * @deprecated
     */
    public function get(?\InfobipSDK\GetParams\Tts\Resource3\Reports $params = null): \InfobipSDK\DTOs\N13d6cf838c63455fe28fcf6ab1b4447c03d816f87ce89525d3cd759ca08a7b1a\VoiceReportResponse
    {
        /** @var \InfobipSDK\DTOs\N13d6cf838c63455fe28fcf6ab1b4447c03d816f87ce89525d3cd759ca08a7b1a\VoiceReportResponse $result */
        $result = $this->executeArguments(self::operation(self::GET), parameters: $params);
        return $result;
    }
}
