<?php

declare(strict_types=1);

namespace InfobipSDK\Resources\Camara\Location\V0;

final class Verify extends \InfobipSDK\Client
{
    private const array POST = [
        'method' => 'POST',
        'path' => '/camara/location/v0/verify',
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
            303 => '\\InfobipSDK\\Responses\\Errors\\Camara\\Location\\V0\\Verify\\PostStatus303Response',
            400 => '\\InfobipSDK\\Responses\\Errors\\Status400Response',
            401 => '\\InfobipSDK\\DTOs\\C4fb96364cd87b1d1d15720880c5153ef26f58342e4ec03b9d5896f2251f17ae\\PlatformErrorResponse',
            403 => null,
            404 => '\\InfobipSDK\\Responses\\Errors\\Status404Response',
            422 => '\\InfobipSDK\\Responses\\Errors\\Status422Response',
            500 => '\\InfobipSDK\\Responses\\Errors\\Status500Response',
        ],
        'errorResponses' => [
            303 => [
                'type' => '\\InfobipSDK\\Responses\\Errors\\Camara\\Location\\V0\\Verify\\PostStatus303Response',
                'schemaNullable' => false,
            ],
            400 => [
                'type' => '\\InfobipSDK\\Responses\\Errors\\Status400Response',
                'schemaNullable' => false,
            ],
            401 => [
                'type' => '\\InfobipSDK\\DTOs\\C4fb96364cd87b1d1d15720880c5153ef26f58342e4ec03b9d5896f2251f17ae\\PlatformErrorResponse',
                'schemaNullable' => false,
            ],
            403 => [
                'type' => '\\InfobipSDK\\Responses\\Errors\\Camara\\Location\\V0\\Verify\\VerifyStatus403Response',
                'schemaNullable' => false,
            ],
            404 => [
                'type' => '\\InfobipSDK\\Responses\\Errors\\Status404Response',
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
        'responseType' => '\\InfobipSDK\\Responses\\Camara\\Location\\V0\\Verify\\Post',
        'requestBody' => [
            'type' => '\\InfobipSDK\\DTOs\\C4fb96364cd87b1d1d15720880c5153ef26f58342e4ec03b9d5896f2251f17ae\\CamaraDeviceLocationVerifyRequestDto',
            'nullable' => false,
            'required' => true,
            'rules' => [],
        ],
    ];

    /**
     * Device Location Verification
     *
     * Use this method to verify whether the device location is within a requested area.
     * A circle with a center specified by the latitude and longitude, and a radius specified by the accuracy.
     *
     */
    public function post(\InfobipSDK\DTOs\C4fb96364cd87b1d1d15720880c5153ef26f58342e4ec03b9d5896f2251f17ae\CamaraDeviceLocationVerifyRequestDto $payload): \InfobipSDK\Responses\Camara\Location\V0\Verify\Post
    {
        /** @var \InfobipSDK\Responses\Camara\Location\V0\Verify\Post $result */
        $result = $this->executeBody(self::operation(self::POST), $payload);
        return $result;
    }

}
