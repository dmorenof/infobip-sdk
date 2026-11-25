<?php

declare(strict_types=1);

namespace InfobipSDK\Resources\Mi\NumberIntelligence\Resource1;

final class Query extends \InfobipSDK\Client
{
    private const array POST = [
        'method' => 'POST',
        'path' => '/mi/number-intelligence/1/query',
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
        'responseType' => '\\InfobipSDK\\Responses\\Mi\\NumberIntelligence\\Resource1\\Query\\Post',
        'requestBody' => [
            'type' => '\\InfobipSDK\\DTOs\\C4fb96364cd87b1d1d15720880c5153ef26f58342e4ec03b9d5896f2251f17ae\\NiQueryRequestDto',
            'nullable' => false,
            'required' => true,
            'rules' => [],
        ],
    ];

    /**
     * Number Intelligence
     *
     * Use this method to perform a query by a mobile phone number (MSISDN) for a given attribute name.
     * API and URL may vary per country. Contact your Account Manager for implementation details.
     */
    public function post(\InfobipSDK\DTOs\C4fb96364cd87b1d1d15720880c5153ef26f58342e4ec03b9d5896f2251f17ae\NiQueryRequestDto $payload): \InfobipSDK\Responses\Mi\NumberIntelligence\Resource1\Query\Post
    {
        /** @var \InfobipSDK\Responses\Mi\NumberIntelligence\Resource1\Query\Post $result */
        $result = $this->executeBody(self::operation(self::POST), $payload);
        return $result;
    }

}
