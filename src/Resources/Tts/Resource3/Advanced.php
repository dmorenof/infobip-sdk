<?php

declare(strict_types=1);

namespace InfobipSDK\Resources\Tts\Resource3;

final class Advanced extends \InfobipSDK\Client
{
    private const array POST = [
        'method' => 'POST',
        'path' => '/tts/3/advanced',
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
            429 => '\\InfobipSDK\\DTOs\\Api\\Exception',
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
            429 => [
                'type' => '\\InfobipSDK\\DTOs\\Api\\Exception',
                'schemaNullable' => false,
            ],
            500 => [
                'type' => '\\InfobipSDK\\DTOs\\Api\\Exception',
                'schemaNullable' => false,
            ],
        ],
        'responseType' => '\\InfobipSDK\\DTOs\\N97cb4ba23432eb0e600ef0617ae1982d499839ef41226973c71dfb335b3071b8\\StandardVoiceResponse',
        'requestBody' => [
            'type' => '\\InfobipSDK\\DTOs\\N329f726ae6e36d1a92786c502bebf028e5aa08cc32a3a8e9f0bed0d82dbc7157\\AdvancedTtsApiRequest',
            'nullable' => false,
            'required' => true,
            'rules' => [],
        ],
    ];

    /**
     * Send advanced voice message
     *
     * This method allows you to send advanced voice messages to one or more destination addresses.
     * Documentation: https://www.infobip.com/docs/voice-and-video/voice-messages
     */
    public function post(\InfobipSDK\DTOs\N329f726ae6e36d1a92786c502bebf028e5aa08cc32a3a8e9f0bed0d82dbc7157\AdvancedTtsApiRequest $payload): \InfobipSDK\DTOs\N97cb4ba23432eb0e600ef0617ae1982d499839ef41226973c71dfb335b3071b8\StandardVoiceResponse
    {
        /** @var \InfobipSDK\DTOs\N97cb4ba23432eb0e600ef0617ae1982d499839ef41226973c71dfb335b3071b8\StandardVoiceResponse $result */
        $result = $this->executeBody(self::operation(self::POST), $payload);
        return $result;
    }
}
