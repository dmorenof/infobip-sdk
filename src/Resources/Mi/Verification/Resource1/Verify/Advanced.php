<?php

declare(strict_types=1);

namespace InfobipSDK\Resources\Mi\Verification\Resource1\Verify;

final class Advanced extends \InfobipSDK\Client
{
    private const array POST = [
        'method' => 'POST',
        'path' => '/mi/verification/1/verify/advanced',
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
            400 => '\\InfobipSDK\\Responses\\Errors\\Status400Variant3Response',
            401 => '\\InfobipSDK\\DTOs\\C4fb96364cd87b1d1d15720880c5153ef26f58342e4ec03b9d5896f2251f17ae\\PlatformErrorResponse',
            403 => '\\InfobipSDK\\DTOs\\C4fb96364cd87b1d1d15720880c5153ef26f58342e4ec03b9d5896f2251f17ae\\PlatformErrorResponse',
            422 => '\\InfobipSDK\\Responses\\Errors\\Status422Variant3Response',
            500 => '\\InfobipSDK\\Responses\\Errors\\Status500Variant4Response',
        ],
        'errorResponses' => [
            400 => [
                'type' => '\\InfobipSDK\\Responses\\Errors\\Status400Variant3Response',
                'schemaNullable' => false,
            ],
            401 => [
                'type' => '\\InfobipSDK\\DTOs\\C4fb96364cd87b1d1d15720880c5153ef26f58342e4ec03b9d5896f2251f17ae\\PlatformErrorResponse',
                'schemaNullable' => false,
            ],
            403 => [
                'type' => '\\InfobipSDK\\DTOs\\C4fb96364cd87b1d1d15720880c5153ef26f58342e4ec03b9d5896f2251f17ae\\PlatformErrorResponse',
                'schemaNullable' => false,
            ],
            422 => [
                'type' => '\\InfobipSDK\\Responses\\Errors\\Status422Variant3Response',
                'schemaNullable' => false,
            ],
            500 => [
                'type' => '\\InfobipSDK\\Responses\\Errors\\Status500Variant4Response',
                'schemaNullable' => false,
            ],
        ],
        'responseType' => '\\InfobipSDK\\Responses\\Mi\\Verification\\Resource1\\Verify\\Advanced\\Post',
        'requestBody' => [
            'type' => '\\InfobipSDK\\DTOs\\C4fb96364cd87b1d1d15720880c5153ef26f58342e4ec03b9d5896f2251f17ae\\SmvVerifyAdvancedRequestDto',
            'nullable' => false,
            'required' => true,
            'rules' => [],
        ],
    ];

    /**
     * Advanced Silent Mobile Verification
     *
     * Verify possession of the end user's mobile phone number with a mobile network operator's data connection.
     * If request body is supplied with additional data, the following can be done:
     * - SIM swap check before the mobile phone number verification
     * - Fallback SMS message if silent mobile verification fails
     *
     * API and URL may vary per country. Contact your Account Manager for implementation details.
     *
     * @deprecated
     */
    public function post(\InfobipSDK\DTOs\C4fb96364cd87b1d1d15720880c5153ef26f58342e4ec03b9d5896f2251f17ae\SmvVerifyAdvancedRequestDto $payload): \InfobipSDK\Responses\Mi\Verification\Resource1\Verify\Advanced\Post
    {
        /** @var \InfobipSDK\Responses\Mi\Verification\Resource1\Verify\Advanced\Post $result */
        $result = $this->executeBody(self::operation(self::POST), $payload);
        return $result;
    }
}
