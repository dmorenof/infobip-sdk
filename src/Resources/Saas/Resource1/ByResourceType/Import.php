<?php

declare(strict_types=1);

namespace InfobipSDK\Resources\Saas\Resource1\ByResourceType;

final class Import extends \InfobipSDK\Client
{
    private const array POST = [
        'method' => 'POST',
        'path' => '/saas/1/{resourceType}/import',
        'security' => [
            [
                'IBSSOTokenHeader' => [],
            ],
            [
                'APIKeyHeader' => [],
            ],
            [
                'OAuth2' => [],
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
        'responseType' => '\\InfobipSDK\\DTOs\\F92ed732784664dca5efb3669b03438e69cca5f33f4420f5b4996e58aa137657\\ImportResponse',
        'requestMediaType' => 'multipart/form-data',
        'bodyParts' => [
            'file' => [
                'contentType' => null,
                'filename' => 'file.bin',
            ],
        ],
    ];

    /**
     * Import SaaS resource
     *
     * Import a SaaS resource to your account.
     */
    public function post(\InfobipSDK\Enums\Saas\Resource1\ByResourceType\Import\Post\Path\ResourceTypeEnum $resourceType, ?\InfobipSDK\Requests\Saas\Resource1\ByResourceType\Import\Post $payload = null): \InfobipSDK\DTOs\F92ed732784664dca5efb3669b03438e69cca5f33f4420f5b4996e58aa137657\ImportResponse
    {
        /** @var \InfobipSDK\DTOs\F92ed732784664dca5efb3669b03438e69cca5f33f4420f5b4996e58aa137657\ImportResponse $result */
        $result = $this->executeArguments(self::operation(self::POST), path: ['resourceType' => $resourceType], body: $payload);
        return $result;
    }

}
