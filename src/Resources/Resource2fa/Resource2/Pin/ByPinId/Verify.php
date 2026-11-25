<?php

declare(strict_types=1);

namespace InfobipSDK\Resources\Resource2fa\Resource2\Pin\ByPinId;

final class Verify extends \InfobipSDK\Client
{
    private const array POST = [
        'method' => 'POST',
        'path' => '/2fa/2/pin/{pinId}/verify',
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
            404 => '\\InfobipSDK\\DTOs\\Api\\Exception',
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
            404 => [
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
        'responseType' => '\\InfobipSDK\\Responses\\Resource2fa\\Resource2\\Pin\\ByPinId\\Verify\\Post\\ByPinIdVerifyResponse',
        'requestBody' => [
            'type' => '\\InfobipSDK\\Requests\\NumberBodyRequest',
            'nullable' => false,
            'required' => false,
            'rules' => [],
        ],
    ];

    /**
     * Verify a PIN
     *
     * Verify OTP to confirm successful phone number verification. pinId is received in the response after [sending the OTP message](#channels/sms/2fa/pin-sending-and-verification/send-2fa-pin-code-over-voice).
     * Documentation: https://www.infobip.com/docs/2fa-service/general-2fa-otp-setup
     */
    public function post(string $pinId, ?\InfobipSDK\Requests\NumberBodyRequest $payload = null): \InfobipSDK\Responses\Resource2fa\Resource2\Pin\ByPinId\Verify\Post\ByPinIdVerifyResponse
    {
        /** @var \InfobipSDK\Responses\Resource2fa\Resource2\Pin\ByPinId\Verify\Post\ByPinIdVerifyResponse $result */
        $result = func_num_args() > 1 ? $this->executeBody(self::operation(self::POST), $payload, path: ['pinId' => $pinId]) : $this->executeArguments(self::operation(self::POST), path: ['pinId' => $pinId]);
        return $result;
    }

}
