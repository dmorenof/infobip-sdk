<?php

declare(strict_types=1);

namespace InfobipSDK\Resources\Camara\NumberVerification\V2\Dcql;

final class Verify extends \InfobipSDK\Client
{
    private const array POST = [
        'method' => 'POST',
        'path' => '/camara/number-verification/v2/dcql/verify',
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
            400 => '\\InfobipSDK\\Responses\\Errors\\Status400Response',
            401 => '\\InfobipSDK\\DTOs\\C4fb96364cd87b1d1d15720880c5153ef26f58342e4ec03b9d5896f2251f17ae\\PlatformErrorResponse',
            403 => null,
            422 => '\\InfobipSDK\\Responses\\Errors\\Status422Response',
            500 => '\\InfobipSDK\\Responses\\Errors\\Status500Variant2Response',
        ],
        'errorResponses' => [
            400 => [
                'type' => '\\InfobipSDK\\Responses\\Errors\\Status400Response',
                'schemaNullable' => false,
            ],
            401 => [
                'type' => '\\InfobipSDK\\DTOs\\C4fb96364cd87b1d1d15720880c5153ef26f58342e4ec03b9d5896f2251f17ae\\PlatformErrorResponse',
                'schemaNullable' => false,
            ],
            403 => [
                'type' => '\\InfobipSDK\\Responses\\Errors\\Camara\\NumberVerification\\V2\\Dcql\\Verify\\VerifyStatus403Response',
                'schemaNullable' => false,
            ],
            422 => [
                'type' => '\\InfobipSDK\\Responses\\Errors\\Status422Response',
                'schemaNullable' => false,
            ],
            500 => [
                'type' => '\\InfobipSDK\\Responses\\Errors\\Status500Variant2Response',
                'schemaNullable' => false,
            ],
        ],
        'responseType' => '\\InfobipSDK\\Responses\\Camara\\NumberVerification\\V2\\Dcql\\Verify\\Post\\DcqlVerifyResponse',
        'requestBody' => [
            'type' => '\\InfobipSDK\\DTOs\\C4fb96364cd87b1d1d15720880c5153ef26f58342e4ec03b9d5896f2251f17ae\\DcqlUseCaseRequestDto',
            'nullable' => false,
            'required' => true,
            'rules' => [],
        ],
    ];

    /**
     * Number verification DCQL Request
     *
     * Use this method to generate a credential request structure for the Android CredentialManager for the SIM-based (TS.43) number verification use case. The response must be passed to the device for SIM-based (TS.43) authentication.
     */
    public function post(\InfobipSDK\DTOs\C4fb96364cd87b1d1d15720880c5153ef26f58342e4ec03b9d5896f2251f17ae\DcqlUseCaseRequestDto $payload): \InfobipSDK\Responses\Camara\NumberVerification\V2\Dcql\Verify\Post\DcqlVerifyResponse
    {
        /** @var \InfobipSDK\Responses\Camara\NumberVerification\V2\Dcql\Verify\Post\DcqlVerifyResponse $result */
        $result = $this->executeBody(self::operation(self::POST), $payload);
        return $result;
    }
}
