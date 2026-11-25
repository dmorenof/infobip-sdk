<?php

declare(strict_types=1);

namespace InfobipSDK\Resources\Camara\NumberVerification\V2;

final class Verify extends \InfobipSDK\Client
{
    private const array POST = [
        'method' => 'POST',
        'path' => '/camara/number-verification/v2/verify',
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
            401 => null,
            403 => null,
            404 => '\\InfobipSDK\\Responses\\Errors\\Status404Response',
            409 => '\\InfobipSDK\\Responses\\Errors\\Status409Response',
            422 => '\\InfobipSDK\\Responses\\Errors\\Status422Response',
            500 => '\\InfobipSDK\\Responses\\Errors\\Status500Response',
        ],
        'errorResponses' => [
            400 => [
                'type' => '\\InfobipSDK\\Responses\\Errors\\Status400Response',
                'schemaNullable' => false,
            ],
            401 => [
                'type' => '\\InfobipSDK\\Responses\\Errors\\Camara\\NumberVerification\\V2\\Verify\\VerifyStatus401Response',
                'schemaNullable' => false,
            ],
            403 => [
                'type' => '\\InfobipSDK\\Responses\\Errors\\Camara\\NumberVerification\\V2\\Verify\\VerifyStatus403Response',
                'schemaNullable' => false,
            ],
            404 => [
                'type' => '\\InfobipSDK\\Responses\\Errors\\Status404Response',
                'schemaNullable' => false,
            ],
            409 => [
                'type' => '\\InfobipSDK\\Responses\\Errors\\Status409Response',
                'schemaNullable' => false,
            ],
            422 => [
                'type' => '\\InfobipSDK\\Responses\\Errors\\Status422Response',
                'schemaNullable' => false,
            ],
            500 => [
                'type' => '\\InfobipSDK\\Responses\\Errors\\Status500Response',
                'schemaNullable' => false,
            ],
        ],
        'responseType' => '\\InfobipSDK\\DTOs\\C4fb96364cd87b1d1d15720880c5153ef26f58342e4ec03b9d5896f2251f17ae\\NumberVerifyResponseDto',
        'requestBody' => [
            'type' => '\\InfobipSDK\\DTOs\\C4fb96364cd87b1d1d15720880c5153ef26f58342e4ec03b9d5896f2251f17ae\\NumberVerifyV2RequestDto',
            'nullable' => false,
            'required' => true,
            'rules' => [],
        ],
    ];

    /**
     * Number Verification
     *
     * Use this method to verify possession of the end-user's mobile phone number with the phone SIM card.
     */
    public function post(\InfobipSDK\PostParams\Camara\NumberVerification\V2\Verify $params): \InfobipSDK\DTOs\C4fb96364cd87b1d1d15720880c5153ef26f58342e4ec03b9d5896f2251f17ae\NumberVerifyResponseDto
    {
        /** @var \InfobipSDK\DTOs\C4fb96364cd87b1d1d15720880c5153ef26f58342e4ec03b9d5896f2251f17ae\NumberVerifyResponseDto $result */
        $result = $this->executeArguments(self::operation(self::POST), parameters: $params);
        return $result;
    }
}
