<?php

declare(strict_types=1);

namespace InfobipSDK\Resources\Camara\NumberVerification\V2;

final class DevicePhoneNumber extends \InfobipSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/camara/number-verification/v2/device-phone-number',
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
                'type' => '\\InfobipSDK\\Responses\\Errors\\Camara\\NumberVerification\\V2\\DevicePhoneNumber\\DevicePhoneNumberStatus401Response',
                'schemaNullable' => false,
            ],
            403 => [
                'type' => '\\InfobipSDK\\Responses\\Errors\\Camara\\NumberVerification\\V2\\DevicePhoneNumber\\DevicePhoneNumberStatus403Response',
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
        'responseType' => '\\InfobipSDK\\DTOs\\C4fb96364cd87b1d1d15720880c5153ef26f58342e4ec03b9d5896f2251f17ae\\DevicePhoneNumberResponseDto',
    ];

    /**
     * Number Retrieval
     *
     * Use this method to retrieve the phone number associated with the device SIM.
     */
    public function get(?\InfobipSDK\GetParams\Camara\NumberVerification\V2\DevicePhoneNumber $params = null): \InfobipSDK\DTOs\C4fb96364cd87b1d1d15720880c5153ef26f58342e4ec03b9d5896f2251f17ae\DevicePhoneNumberResponseDto
    {
        /** @var \InfobipSDK\DTOs\C4fb96364cd87b1d1d15720880c5153ef26f58342e4ec03b9d5896f2251f17ae\DevicePhoneNumberResponseDto $result */
        $result = $this->executeArguments(self::operation(self::GET), parameters: $params);
        return $result;
    }
}
