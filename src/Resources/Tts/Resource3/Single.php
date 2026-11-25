<?php

declare(strict_types=1);

namespace InfobipSDK\Resources\Tts\Resource3;

final class Single extends \InfobipSDK\Client
{
    private const array POST = [
        'method' => 'POST',
        'path' => '/tts/3/single',
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
            'type' => '\\InfobipSDK\\DTOs\\N4171c7b532e904c90fa2d755f583a0120bed3adbb383ab2309fddb57ee41f476\\SingleTtsApiRequest',
            'nullable' => false,
            'required' => true,
            'rules' => [],
        ],
    ];

    /**
     * Send single voice message
     *
     * This method allows you to send single voice message to one or more destination addresses.
     * Documentation: https://www.infobip.com/docs/voice-and-video/voice-messages
     */
    public function post(\InfobipSDK\DTOs\N4171c7b532e904c90fa2d755f583a0120bed3adbb383ab2309fddb57ee41f476\SingleTtsApiRequest $payload): \InfobipSDK\DTOs\N97cb4ba23432eb0e600ef0617ae1982d499839ef41226973c71dfb335b3071b8\StandardVoiceResponse
    {
        /** @var \InfobipSDK\DTOs\N97cb4ba23432eb0e600ef0617ae1982d499839ef41226973c71dfb335b3071b8\StandardVoiceResponse $result */
        $result = $this->executeBody(self::operation(self::POST), $payload);
        return $result;
    }

}
