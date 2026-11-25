<?php

declare(strict_types=1);

namespace InfobipSDK\Resources\LineOa\Resource1;

final class Messages extends \InfobipSDK\Client
{
    private const array POST = [
        'method' => 'POST',
        'path' => '/line-oa/1/messages',
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
            400 => '\\InfobipSDK\\DTOs\\Api\\Error',
            401 => '\\InfobipSDK\\DTOs\\Api\\Error',
            403 => '\\InfobipSDK\\DTOs\\Api\\Error',
            500 => '\\InfobipSDK\\DTOs\\Api\\Error',
        ],
        'errorResponses' => [
            400 => [
                'type' => '\\InfobipSDK\\DTOs\\Api\\Error',
                'schemaNullable' => false,
            ],
            401 => [
                'type' => '\\InfobipSDK\\DTOs\\Api\\Error',
                'schemaNullable' => false,
            ],
            403 => [
                'type' => '\\InfobipSDK\\DTOs\\Api\\Error',
                'schemaNullable' => false,
            ],
            500 => [
                'type' => '\\InfobipSDK\\DTOs\\Api\\Error',
                'schemaNullable' => false,
            ],
        ],
        'responseType' => '\\InfobipSDK\\DTOs\\N53932f53b54839fd583eae39fe878805e79c364296f164379eb97a5f2c4b6c59\\ResponseEnvelopeMessageResponseMessageResponseDetails',
        'requestBody' => [
            'type' => '\\InfobipSDK\\DTOs\\N53932f53b54839fd583eae39fe878805e79c364296f164379eb97a5f2c4b6c59\\LineOaRequest',
            'nullable' => false,
            'required' => true,
            'rules' => [],
        ],
    ];

    /**
     * Send a LINE Official Account message
     *
     * Send one or more messages to multiple recipients.
     * Documentation: https://www.infobip.com/docs/line
     */
    public function post(\InfobipSDK\DTOs\N53932f53b54839fd583eae39fe878805e79c364296f164379eb97a5f2c4b6c59\LineOaRequest $payload): \InfobipSDK\DTOs\N53932f53b54839fd583eae39fe878805e79c364296f164379eb97a5f2c4b6c59\ResponseEnvelopeMessageResponseMessageResponseDetails
    {
        /** @var \InfobipSDK\DTOs\N53932f53b54839fd583eae39fe878805e79c364296f164379eb97a5f2c4b6c59\ResponseEnvelopeMessageResponseMessageResponseDetails $result */
        $result = $this->executeBody(self::operation(self::POST), $payload);
        return $result;
    }

}
