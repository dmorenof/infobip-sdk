<?php

declare(strict_types=1);

namespace InfobipSDK\Resources\Resource2fa\Resource2\Applications\ByAppId;

final class Verifications extends \InfobipSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/2fa/2/applications/{appId}/verifications',
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
            401 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            403 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            404 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            '4XX' => '\\InfobipSDK\\DTOs\\N96ea7b6cea267e43daadde063d93b8799cdb795baa0e9344573e0f63283595e0\\ApiException',
            500 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            '5XX' => '\\InfobipSDK\\DTOs\\N96ea7b6cea267e43daadde063d93b8799cdb795baa0e9344573e0f63283595e0\\ApiException',
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
        'responseType' => '\\InfobipSDK\\Responses\\Resource2fa\\Resource2\\Applications\\ByAppId\\Verifications\\Get\\ByAppIdVerificationsResponse',
    ];

    /**
     * Get 2FA verification status
     *
     * Check if a phone number (or email) is already verified for a specific 2FA application.
     * Documentation: https://www.infobip.com/docs/2fa-service/general-2fa-otp-setup
     */
    public function get(string $appId, \InfobipSDK\GetParams\Resource2fa\Resource2\Applications\ByAppId\Verifications $params): \InfobipSDK\Responses\Resource2fa\Resource2\Applications\ByAppId\Verifications\Get\ByAppIdVerificationsResponse
    {
        /** @var \InfobipSDK\Responses\Resource2fa\Resource2\Applications\ByAppId\Verifications\Get\ByAppIdVerificationsResponse $result */
        $result = $this->executeArguments(self::operation(self::GET), path: ['appId' => $appId], parameters: $params);
        return $result;
    }
}
