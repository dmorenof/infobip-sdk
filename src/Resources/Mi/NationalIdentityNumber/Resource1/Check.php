<?php

declare(strict_types=1);

namespace InfobipSDK\Resources\Mi\NationalIdentityNumber\Resource1;

final class Check extends \InfobipSDK\Client
{
    private const array POST = [
        'method' => 'POST',
        'path' => '/mi/national-identity-number/1/check',
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
            400 => '\\InfobipSDK\\Responses\\Errors\\Status400Variant2Response',
            401 => '\\InfobipSDK\\DTOs\\C4fb96364cd87b1d1d15720880c5153ef26f58342e4ec03b9d5896f2251f17ae\\PlatformErrorResponse',
            403 => '\\InfobipSDK\\DTOs\\C4fb96364cd87b1d1d15720880c5153ef26f58342e4ec03b9d5896f2251f17ae\\PlatformErrorResponse',
            422 => '\\InfobipSDK\\Responses\\Errors\\Status422Variant2Response',
            500 => '\\InfobipSDK\\Responses\\Errors\\Status500Variant3Response',
        ],
        'errorResponses' => [
            400 => [
                'type' => '\\InfobipSDK\\Responses\\Errors\\Status400Variant2Response',
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
                'type' => '\\InfobipSDK\\Responses\\Errors\\Status422Variant2Response',
                'schemaNullable' => false,
            ],
            500 => [
                'type' => '\\InfobipSDK\\Responses\\Errors\\Status500Variant3Response',
                'schemaNullable' => false,
            ],
        ],
        'responseType' => '\\InfobipSDK\\Responses\\Mi\\NationalIdentityNumber\\Resource1\\Check\\Post',
        'requestBody' => [
            'type' => '\\InfobipSDK\\DTOs\\C4fb96364cd87b1d1d15720880c5153ef26f58342e4ec03b9d5896f2251f17ae\\NinCheckRequestDto',
            'nullable' => false,
            'required' => true,
            'rules' => [],
        ],
    ];

    /**
     * National Identity Number check
     *
     * Check if provided mobile phone number (MSISDN) belongs to user with provided national identity number.
     *
     */
    public function post(\InfobipSDK\DTOs\C4fb96364cd87b1d1d15720880c5153ef26f58342e4ec03b9d5896f2251f17ae\NinCheckRequestDto $payload): \InfobipSDK\Responses\Mi\NationalIdentityNumber\Resource1\Check\Post
    {
        /** @var \InfobipSDK\Responses\Mi\NationalIdentityNumber\Resource1\Check\Post $result */
        $result = $this->executeBody(self::operation(self::POST), $payload);
        return $result;
    }

}
