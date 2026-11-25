<?php

declare(strict_types=1);

namespace InfobipSDK\Resources\Email\Resource1\Templates\ByTemplateId;

final class Preview extends \InfobipSDK\Client
{
    private const array POST = [
        'method' => 'POST',
        'path' => '/email/1/templates/{templateId}/preview',
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
        'responseType' => 'string',
        'responseMediaType' => 'text/html',
        'responseEncoding' => 'text',
        'requestMediaType' => 'multipart/form-data',
        'bodyParts' => [
            'placeholders' => [
                'contentType' => 'application/json',
                'json' => true,
            ],
        ],
    ];

    /**
     * Generate email template preview
     *
     * Generates a rendered preview of an email template by replacing placeholders with the provided key-value data.
     */
    public function post(int $templateId, ?\InfobipSDK\DTOs\N39bb6975d36d214ea076d974c69ec0b82edda805f4c6bf36a3f6f7d154c98fa0\EmailTemplatePreviewRequest $payload = null): string
    {
        /** @var string $result */
        $result = $this->executeArguments(self::operation(self::POST), path: ['templateId' => $templateId], body: $payload);
        return $result;
    }

}
