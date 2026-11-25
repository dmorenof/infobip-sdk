<?php

declare(strict_types=1);

namespace InfobipSDK\Resources\Camara\SimSwap\V0;

final class Check extends \InfobipSDK\Client
{
    private const array POST = [
        'method' => 'POST',
        'path' => '/camara/sim-swap/v0/check',
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
            404 => '\\InfobipSDK\\Responses\\Errors\\Camara\\SimSwap\\V0\\Check\\PostStatus404Response',
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
                'type' => '\\InfobipSDK\\Responses\\Errors\\Camara\\SimSwap\\V0\\Check\\CheckStatus403Response',
                'schemaNullable' => false,
            ],
            404 => [
                'type' => '\\InfobipSDK\\Responses\\Errors\\Camara\\SimSwap\\V0\\Check\\PostStatus404Response',
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
        'responseType' => '\\InfobipSDK\\DTOs\\C4fb96364cd87b1d1d15720880c5153ef26f58342e4ec03b9d5896f2251f17ae\\CamaraSimSwapCheckResponseDto',
        'requestBody' => [
            'type' => '\\InfobipSDK\\DTOs\\C4fb96364cd87b1d1d15720880c5153ef26f58342e4ec03b9d5896f2251f17ae\\CamaraSimSwapCheckRequestDto',
            'nullable' => false,
            'required' => true,
            'rules' => [],
        ],
    ];

    /**
     * SIM Swap
     *
     * Use this method to verify if there was a SIM swap event for a given mobile phone number and period.
     */
    public function post(\InfobipSDK\DTOs\C4fb96364cd87b1d1d15720880c5153ef26f58342e4ec03b9d5896f2251f17ae\CamaraSimSwapCheckRequestDto $payload): \InfobipSDK\DTOs\C4fb96364cd87b1d1d15720880c5153ef26f58342e4ec03b9d5896f2251f17ae\CamaraSimSwapCheckResponseDto
    {
        /** @var \InfobipSDK\DTOs\C4fb96364cd87b1d1d15720880c5153ef26f58342e4ec03b9d5896f2251f17ae\CamaraSimSwapCheckResponseDto $result */
        $result = $this->executeBody(self::operation(self::POST), $payload);
        return $result;
    }
}
