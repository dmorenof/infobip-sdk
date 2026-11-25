<?php

declare(strict_types=1);

namespace InfobipSDK\Resources\Camara\NumberRecycling\V02;

final class Check extends \InfobipSDK\Client
{
    private const array POST = [
        'method' => 'POST',
        'path' => '/camara/number-recycling/v0.2/check',
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
            400 => '\\InfobipSDK\\Responses\\Errors\\Camara\\NumberRecycling\\V02\\Check\\PostStatus400Response',
            401 => '\\InfobipSDK\\DTOs\\C4fb96364cd87b1d1d15720880c5153ef26f58342e4ec03b9d5896f2251f17ae\\PlatformErrorResponse',
            403 => null,
            404 => '\\InfobipSDK\\Responses\\Errors\\Camara\\NumberRecycling\\V02\\Check\\PostStatus404Response',
            422 => '\\InfobipSDK\\Responses\\Errors\\Camara\\NumberRecycling\\V02\\Check\\PostStatus422Response',
            500 => '\\InfobipSDK\\Responses\\Errors\\Status500Response',
        ],
        'errorResponses' => [
            400 => [
                'type' => '\\InfobipSDK\\Responses\\Errors\\Camara\\NumberRecycling\\V02\\Check\\PostStatus400Response',
                'schemaNullable' => false,
            ],
            401 => [
                'type' => '\\InfobipSDK\\DTOs\\C4fb96364cd87b1d1d15720880c5153ef26f58342e4ec03b9d5896f2251f17ae\\PlatformErrorResponse',
                'schemaNullable' => false,
            ],
            403 => [
                'type' => '\\InfobipSDK\\Responses\\Errors\\Camara\\NumberRecycling\\V02\\Check\\CheckStatus403Response',
                'schemaNullable' => false,
            ],
            404 => [
                'type' => '\\InfobipSDK\\Responses\\Errors\\Camara\\NumberRecycling\\V02\\Check\\PostStatus404Response',
                'schemaNullable' => false,
            ],
            422 => [
                'type' => '\\InfobipSDK\\Responses\\Errors\\Camara\\NumberRecycling\\V02\\Check\\PostStatus422Response',
                'schemaNullable' => false,
            ],
            500 => [
                'type' => '\\InfobipSDK\\Responses\\Errors\\Status500Response',
                'schemaNullable' => false,
            ],
        ],
        'responseType' => '\\InfobipSDK\\Responses\\Camara\\NumberRecycling\\V02\\Check\\Post',
        'requestBody' => [
            'type' => '\\InfobipSDK\\DTOs\\C4fb96364cd87b1d1d15720880c5153ef26f58342e4ec03b9d5896f2251f17ae\\CamaraNumberRecyclingCheckRequestDto',
            'nullable' => false,
            'required' => true,
            'rules' => [],
        ],
    ];

    /**
     * Number Recycling Check
     *
     * Use this method to check whether the subscriber of the specified phone number has changed.
     *
     */
    public function post(\InfobipSDK\DTOs\C4fb96364cd87b1d1d15720880c5153ef26f58342e4ec03b9d5896f2251f17ae\CamaraNumberRecyclingCheckRequestDto $payload): \InfobipSDK\Responses\Camara\NumberRecycling\V02\Check\Post
    {
        /** @var \InfobipSDK\Responses\Camara\NumberRecycling\V02\Check\Post $result */
        $result = $this->executeBody(self::operation(self::POST), $payload);
        return $result;
    }
}
