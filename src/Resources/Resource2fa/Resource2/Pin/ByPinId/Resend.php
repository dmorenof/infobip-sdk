<?php

declare(strict_types=1);

namespace InfobipSDK\Resources\Resource2fa\Resource2\Pin\ByPinId;

final class Resend extends \InfobipSDK\Client
{
    private const array POST = [
        'method' => 'POST',
        'path' => '/2fa/2/pin/{pinId}/resend',
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
        'responseType' => '\\InfobipSDK\\Responses\\Resource2fa\\Resource2\\Pin\\ByPinId\\Resend\\Post\\ByPinIdResendResponse',
        'requestBody' => [
            'type' => '\\InfobipSDK\\Requests\\AllOfResend2faPinCodeOverSmsBody\\SmsBodyRequest',
            'nullable' => false,
            'required' => false,
            'rules' => [],
        ],
    ];

    /**
     * Resend 2FA PIN code over SMS
     *
     * If needed, you can resend the same (previously sent) PIN code over SMS.
     * Documentation: https://www.infobip.com/docs/2fa-service/general-2fa-otp-setup
     */
    public function post(string $pinId, ?\InfobipSDK\Requests\AllOfResend2faPinCodeOverSmsBody\SmsBodyRequest $payload = null): \InfobipSDK\Responses\Resource2fa\Resource2\Pin\ByPinId\Resend\Post\ByPinIdResendResponse
    {
        /** @var \InfobipSDK\Responses\Resource2fa\Resource2\Pin\ByPinId\Resend\Post\ByPinIdResendResponse $result */
        $result = func_num_args() > 1 ? $this->executeBody(self::operation(self::POST), $payload, path: ['pinId' => $pinId]) : $this->executeArguments(self::operation(self::POST), path: ['pinId' => $pinId]);
        return $result;
    }
}
