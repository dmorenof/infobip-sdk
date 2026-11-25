<?php

declare(strict_types=1);

namespace InfobipSDK\Resources\Whatsapp\Resource1\Senders\BySender\Flows\ByFlowId;

final class Deprecate extends \InfobipSDK\Client
{
    private const array POST = [
        'method' => 'POST',
        'path' => '/whatsapp/1/senders/{sender}/flows/{flowId}/deprecate',
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
            204,
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
        'validation' => [
            'flowId' => [
                'minLength' => 1,
            ],
            'sender' => [
                'minLength' => 1,
            ],
        ],
    ];

    /**
     * Deprecate WhatsApp Flow
     *
     * Deprecate a WhatsApp flow. If successful, flow will change its status to DEPRECATED. From now on flow cannot be sent anymore.
     * Documentation: https://www.infobip.com/docs/whatsapp
     */
    public function post(\InfobipSDK\PathParams\Whatsapp\Resource1\Senders\BySender\Flows\ByFlowId\Deprecate $identifier): void
    {
        $this->executeArguments(self::operation(self::POST), path: $identifier);
        return;
    }

}
