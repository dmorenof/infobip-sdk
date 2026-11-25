<?php

declare(strict_types=1);

namespace InfobipSDK\Resources\Markuplanguage\Resource1;

final class Create extends \InfobipSDK\Client
{
    private const array POST = [
        'method' => 'POST',
        'path' => '/markuplanguage/1/create',
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
        'success' => [
            201,
        ],
        'errors' => [
            400 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            401 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            403 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            429 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            500 => '\\InfobipSDK\\DTOs\\Api\\Exception',
        ],
        'errorResponses' => [
            400 => [
                'type' => '\\InfobipSDK\\DTOs\\Api\\Exception',
                'schemaNullable' => false,
            ],
            401 => [
                'type' => '\\InfobipSDK\\DTOs\\Api\\Exception',
                'schemaNullable' => false,
            ],
            403 => [
                'type' => '\\InfobipSDK\\DTOs\\Api\\Exception',
                'schemaNullable' => false,
            ],
            429 => [
                'type' => '\\InfobipSDK\\DTOs\\Api\\Exception',
                'schemaNullable' => false,
            ],
            500 => [
                'type' => '\\InfobipSDK\\DTOs\\Api\\Exception',
                'schemaNullable' => false,
            ],
        ],
        'responseType' => '\\InfobipSDK\\DTOs\\Eaaf11bb9830fc826a8597df01bea6f2a14ef6d1ed129a4f6623981d52827778\\MarkupResponse',
        'requestBody' => [
            'type' => '\\InfobipSDK\\DTOs\\Eaaf11bb9830fc826a8597df01bea6f2a14ef6d1ed129a4f6623981d52827778\\MarkupRequest',
            'nullable' => false,
            'required' => true,
            'rules' => [],
        ],
    ];

    /**
     * Create markup language call
     *
     * Create a new markup language call which will be processed according to provided markup instructions.
     */
    public function post(\InfobipSDK\DTOs\Eaaf11bb9830fc826a8597df01bea6f2a14ef6d1ed129a4f6623981d52827778\MarkupRequest $payload): \InfobipSDK\DTOs\Eaaf11bb9830fc826a8597df01bea6f2a14ef6d1ed129a4f6623981d52827778\MarkupResponse
    {
        /** @var \InfobipSDK\DTOs\Eaaf11bb9830fc826a8597df01bea6f2a14ef6d1ed129a4f6623981d52827778\MarkupResponse $result */
        $result = $this->executeBody(self::operation(self::POST), $payload);
        return $result;
    }
}
