<?php

declare(strict_types=1);

namespace InfobipSDK\Resources\Mi\Simswap\Resource1;

final class Check extends \InfobipSDK\Client
{
    private const array POST = [
        'method' => 'POST',
        'path' => '/mi/simswap/1/check',
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
            400 => '\\InfobipSDK\\Responses\\Errors\\Mi\\Simswap\\Resource1\\Check\\PostStatus400Response',
            401 => '\\InfobipSDK\\DTOs\\C4fb96364cd87b1d1d15720880c5153ef26f58342e4ec03b9d5896f2251f17ae\\PlatformErrorResponse',
            403 => '\\InfobipSDK\\DTOs\\C4fb96364cd87b1d1d15720880c5153ef26f58342e4ec03b9d5896f2251f17ae\\PlatformErrorResponse',
            422 => '\\InfobipSDK\\Responses\\Errors\\Mi\\Simswap\\Resource1\\Check\\PostStatus422Response',
            500 => '\\InfobipSDK\\Responses\\Errors\\Mi\\Simswap\\Resource1\\Check\\PostStatus500Response',
        ],
        'errorResponses' => [
            400 => [
                'type' => '\\InfobipSDK\\Responses\\Errors\\Mi\\Simswap\\Resource1\\Check\\PostStatus400Response',
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
                'type' => '\\InfobipSDK\\Responses\\Errors\\Mi\\Simswap\\Resource1\\Check\\PostStatus422Response',
                'schemaNullable' => false,
            ],
            500 => [
                'type' => '\\InfobipSDK\\Responses\\Errors\\Mi\\Simswap\\Resource1\\Check\\PostStatus500Response',
                'schemaNullable' => false,
            ],
        ],
        'responseType' => '\\InfobipSDK\\Responses\\Mi\\Simswap\\Resource1\\Check\\Post',
        'requestBody' => [
            'type' => '\\InfobipSDK\\DTOs\\C4fb96364cd87b1d1d15720880c5153ef26f58342e4ec03b9d5896f2251f17ae\\SimSwapCheckRequestDto',
            'nullable' => false,
            'required' => true,
            'rules' => [],
        ],
    ];

    /**
     * SIM Swap
     *
     * Verify if there was a SIM swap event for a given mobile phone number and period.<br/>
     * API and URL may vary per country. Contact your Account Manager for implementation details.
     */
    public function post(\InfobipSDK\DTOs\C4fb96364cd87b1d1d15720880c5153ef26f58342e4ec03b9d5896f2251f17ae\SimSwapCheckRequestDto $payload): \InfobipSDK\Responses\Mi\Simswap\Resource1\Check\Post
    {
        /** @var \InfobipSDK\Responses\Mi\Simswap\Resource1\Check\Post $result */
        $result = $this->executeBody(self::operation(self::POST), $payload);
        return $result;
    }
}
