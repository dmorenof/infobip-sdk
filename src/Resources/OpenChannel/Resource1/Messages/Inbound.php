<?php

declare(strict_types=1);

namespace InfobipSDK\Resources\OpenChannel\Resource1\Messages;

final class Inbound extends \InfobipSDK\Client
{
    private const array POST = [
        'method' => 'POST',
        'path' => '/open-channel/1/messages/inbound',
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
            404 => '\\InfobipSDK\\DTOs\\Api\\Error',
            429 => '\\InfobipSDK\\DTOs\\Api\\Error',
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
            404 => [
                'type' => '\\InfobipSDK\\DTOs\\Api\\Error',
                'schemaNullable' => false,
            ],
            429 => [
                'type' => '\\InfobipSDK\\DTOs\\Api\\Error',
                'schemaNullable' => false,
            ],
            500 => [
                'type' => '\\InfobipSDK\\DTOs\\Api\\Error',
                'schemaNullable' => false,
            ],
        ],
        'responseType' => '\\InfobipSDK\\DTOs\\N0a37b8c521b3309d1bbd0669d19fc7f2f157d68a68747b5e7ad23e5b0f5e47e8\\OpenChannelMessageResponse',
        'requestBody' => [
            'type' => '\\InfobipSDK\\DTOs\\N0a37b8c521b3309d1bbd0669d19fc7f2f157d68a68747b5e7ad23e5b0f5e47e8\\OpenChannelMessageRequest',
            'nullable' => false,
            'required' => true,
            'rules' => [],
        ],
    ];

    /**
     * Send Open Channel inbound message
     *
     * Sends a message to Open Channel destination registered on Infobip platform.
     */
    public function post(\InfobipSDK\DTOs\N0a37b8c521b3309d1bbd0669d19fc7f2f157d68a68747b5e7ad23e5b0f5e47e8\OpenChannelMessageRequest $payload): \InfobipSDK\DTOs\N0a37b8c521b3309d1bbd0669d19fc7f2f157d68a68747b5e7ad23e5b0f5e47e8\OpenChannelMessageResponse
    {
        /** @var \InfobipSDK\DTOs\N0a37b8c521b3309d1bbd0669d19fc7f2f157d68a68747b5e7ad23e5b0f5e47e8\OpenChannelMessageResponse $result */
        $result = $this->executeBody(self::operation(self::POST), $payload);
        return $result;
    }
}
