<?php

declare(strict_types=1);

namespace InfobipSDK\Resources\Resource2fa\Resource2\Pin;

final class Voice extends \InfobipSDK\Client
{
    private const array POST = [
        'method' => 'POST',
        'path' => '/2fa/2/pin/voice',
        'security' => [
            [
                'Basic' => [],
            ],
            [
                'APIKeyHeader' => [],
            ],
            [
                'IBSSOTokenHeader' => [],
            ],
            [
                'OAuth2' => [],
            ],
        ],
        'errors' => [
            400 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            401 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            403 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            '4XX' => '\\InfobipSDK\\DTOs\\N96ea7b6cea267e43daadde063d93b8799cdb795baa0e9344573e0f63283595e0\\ApiException',
            500 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            '5XX' => '\\InfobipSDK\\DTOs\\N96ea7b6cea267e43daadde063d93b8799cdb795baa0e9344573e0f63283595e0\\ApiException',
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
            '4XX' => [
                'type' => '\\InfobipSDK\\DTOs\\N96ea7b6cea267e43daadde063d93b8799cdb795baa0e9344573e0f63283595e0\\ApiException',
                'schemaNullable' => false,
            ],
            500 => [
                'type' => '\\InfobipSDK\\DTOs\\Api\\Exception',
                'schemaNullable' => false,
            ],
            '5XX' => [
                'type' => '\\InfobipSDK\\DTOs\\N96ea7b6cea267e43daadde063d93b8799cdb795baa0e9344573e0f63283595e0\\ApiException',
                'schemaNullable' => false,
            ],
        ],
        'responseType' => '\\InfobipSDK\\Responses\\Resource2fa\\Resource2\\Pin\\Voice\\Post\\PinVoiceResponse',
        'requestBody' => [
            'type' => '\\InfobipSDK\\Requests\\VoiceBodyRequest',
            'nullable' => false,
            'required' => false,
            'rules' => [],
        ],
    ];

    /**
     * Send 2FA PIN code over Voice
     *
     * Send a PIN code over Voice using previously created [message template](#channels/sms/create-2fa-message-template).
     * Documentation: https://www.infobip.com/docs/2fa-service/general-2fa-otp-setup
     */
    public function post(?\InfobipSDK\Requests\VoiceBodyRequest $payload = null): \InfobipSDK\Responses\Resource2fa\Resource2\Pin\Voice\Post\PinVoiceResponse
    {
        /** @var \InfobipSDK\Responses\Resource2fa\Resource2\Pin\Voice\Post\PinVoiceResponse $result */
        $result = func_num_args() > 0 ? $this->executeBody(self::operation(self::POST), $payload) : $this->executeArguments(self::operation(self::POST));
        return $result;
    }

}
