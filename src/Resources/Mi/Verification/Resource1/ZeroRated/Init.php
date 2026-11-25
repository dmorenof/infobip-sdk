<?php

declare(strict_types=1);

namespace InfobipSDK\Resources\Mi\Verification\Resource1\ZeroRated;

final class Init extends \InfobipSDK\Client
{
    private const array POST = [
        'method' => 'POST',
        'path' => '/mi/verification/1/zero-rated/init',
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
            400 => '\\InfobipSDK\\Responses\\Errors\\Mi\\Verification\\Resource1\\ZeroRated\\Init\\PostStatus400Response',
            401 => '\\InfobipSDK\\DTOs\\C4fb96364cd87b1d1d15720880c5153ef26f58342e4ec03b9d5896f2251f17ae\\PlatformErrorResponse',
            403 => '\\InfobipSDK\\DTOs\\C4fb96364cd87b1d1d15720880c5153ef26f58342e4ec03b9d5896f2251f17ae\\PlatformErrorResponse',
            500 => '\\InfobipSDK\\Responses\\Errors\\Mi\\Verification\\Resource1\\ZeroRated\\Init\\PostStatus500Response',
        ],
        'errorResponses' => [
            400 => [
                'type' => '\\InfobipSDK\\Responses\\Errors\\Mi\\Verification\\Resource1\\ZeroRated\\Init\\PostStatus400Response',
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
            500 => [
                'type' => '\\InfobipSDK\\Responses\\Errors\\Mi\\Verification\\Resource1\\ZeroRated\\Init\\PostStatus500Response',
                'schemaNullable' => false,
            ],
        ],
        'responseType' => '\\InfobipSDK\\Responses\\Mi\\Verification\\Resource1\\ZeroRated\\Init\\Post',
        'requestBody' => [
            'type' => '\\InfobipSDK\\DTOs\\C4fb96364cd87b1d1d15720880c5153ef26f58342e4ec03b9d5896f2251f17ae\\InitZeroRatedRequestDto',
            'nullable' => false,
            'required' => true,
            'rules' => [],
        ],
    ];

    /**
     * Zero rated request initialization
     *
     * Initialise zero rated request.
     * This API endpoint is available only in Brazil. Please contact your sales for more details.
     *
     * @deprecated
     */
    public function post(\InfobipSDK\DTOs\C4fb96364cd87b1d1d15720880c5153ef26f58342e4ec03b9d5896f2251f17ae\InitZeroRatedRequestDto $payload): \InfobipSDK\Responses\Mi\Verification\Resource1\ZeroRated\Init\Post
    {
        /** @var \InfobipSDK\Responses\Mi\Verification\Resource1\ZeroRated\Init\Post $result */
        $result = $this->executeBody(self::operation(self::POST), $payload);
        return $result;
    }

}
