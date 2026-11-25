<?php

declare(strict_types=1);

namespace InfobipSDK\Resources\Omni\Resource1;

final class Advanced extends \InfobipSDK\Client
{
    private const array POST = [
        'method' => 'POST',
        'path' => '/omni/1/advanced',
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
            400 => '\\InfobipSDK\\DTOs\\Bed2167e3f739c7f0ded9831d75a7a93f11864f45170ef7c0c6b02ad17bd1a97\\ApiException',
            401 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            403 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            500 => '\\InfobipSDK\\DTOs\\Api\\Exception',
        ],
        'errorResponses' => [
            400 => [
                'type' => '\\InfobipSDK\\DTOs\\Bed2167e3f739c7f0ded9831d75a7a93f11864f45170ef7c0c6b02ad17bd1a97\\ApiException',
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
            500 => [
                'type' => '\\InfobipSDK\\DTOs\\Api\\Exception',
                'schemaNullable' => false,
            ],
        ],
        'responseType' => '\\InfobipSDK\\DTOs\\N8a486cb9d74b424a2d3be79e8747a253b2d16548f487145eca2db9192c11dbe8\\OmniResponse',
        'requestBody' => [
            'type' => '\\InfobipSDK\\DTOs\\N04790a6ae08cb63186016b6e4b8eb1c003a31d6a3227220686470a5721dc2d02\\OmniAdvancedRequest',
            'nullable' => false,
            'required' => true,
            'rules' => [],
        ],
    ];

    /**
     * Send OMNI failover message
     *
     * Send one or multiple messages over WhatsApp, Viber, Voice, VKontakte, Line, SMS or Push, with automatic failover to another channel according to the specific scenario.
     */
    public function post(\InfobipSDK\DTOs\N04790a6ae08cb63186016b6e4b8eb1c003a31d6a3227220686470a5721dc2d02\OmniAdvancedRequest $payload): \InfobipSDK\DTOs\N8a486cb9d74b424a2d3be79e8747a253b2d16548f487145eca2db9192c11dbe8\OmniResponse
    {
        /** @var \InfobipSDK\DTOs\N8a486cb9d74b424a2d3be79e8747a253b2d16548f487145eca2db9192c11dbe8\OmniResponse $result */
        $result = $this->executeBody(self::operation(self::POST), $payload);
        return $result;
    }
}
