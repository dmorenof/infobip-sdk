<?php

declare(strict_types=1);

namespace InfobipSDK\Resources\Voice\Ivr\Resource1;

final class Messages extends \InfobipSDK\Client
{
    private const array POST = [
        'method' => 'POST',
        'path' => '/voice/ivr/1/messages',
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
            400 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            401 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            403 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            500 => '\\InfobipSDK\\DTOs\\Api\\Exception',
        ],
        'errorResponses' => [
            400 => [
                'type' => '\\InfobipSDK\\DTOs\\Api\\Exception',
                'schemaNullable' => false,
            ],
            401 => [
                'type' => '\\InfobipSDK\\DTOs\\Api\\Exception',
                'schemaNullable' => false,
            ],
            403 => [
                'type' => '\\InfobipSDK\\DTOs\\Api\\Exception',
                'schemaNullable' => false,
            ],
            500 => [
                'type' => '\\InfobipSDK\\DTOs\\Api\\Exception',
                'schemaNullable' => false,
            ],
        ],
        'responseType' => '\\InfobipSDK\\DTOs\\N13d6cf838c63455fe28fcf6ab1b4447c03d816f87ce89525d3cd759ca08a7b1a\\StandardVoiceResponse',
        'requestBody' => [
            'type' => '\\InfobipSDK\\DTOs\\N13d6cf838c63455fe28fcf6ab1b4447c03d816f87ce89525d3cd759ca08a7b1a\\LaunchScenarioRequest',
            'nullable' => false,
            'required' => true,
            'rules' => [],
        ],
    ];

    /**
     * Launch IVR Scenario
     *
     * This method allows you to start an outbound IVR toward a multiple destinations.
     */
    public function post(\InfobipSDK\DTOs\N13d6cf838c63455fe28fcf6ab1b4447c03d816f87ce89525d3cd759ca08a7b1a\LaunchScenarioRequest $payload): \InfobipSDK\DTOs\N13d6cf838c63455fe28fcf6ab1b4447c03d816f87ce89525d3cd759ca08a7b1a\StandardVoiceResponse
    {
        /** @var \InfobipSDK\DTOs\N13d6cf838c63455fe28fcf6ab1b4447c03d816f87ce89525d3cd759ca08a7b1a\StandardVoiceResponse $result */
        $result = $this->executeBody(self::operation(self::POST), $payload);
        return $result;
    }

}
