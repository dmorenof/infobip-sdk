<?php

declare(strict_types=1);

namespace InfobipSDK\Resources\Email\Resource2;

final class Validations extends \InfobipSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/email/2/validations',
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
            401 => '\\InfobipSDK\\DTOs\\Api\\Error',
            403 => '\\InfobipSDK\\DTOs\\Api\\Error',
            429 => '\\InfobipSDK\\DTOs\\Api\\Error',
            500 => '\\InfobipSDK\\DTOs\\Api\\Error',
        ],
        'errorResponses' => [
            401 => [
                'type' => '\\InfobipSDK\\DTOs\\Api\\Error',
                'schemaNullable' => false,
            ],
            403 => [
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
        'responseType' => '\\InfobipSDK\\DTOs\\N45c843446703ba5f4438a6f721c629420452796de20bd3dd9adfccde3ed2ffff\\GetValidationPageResponse',
        'querySerialization' => [
            'destination' => 'multi',
        ],
    ];

    /**
     * Get email validations
     *
     * This method lets you review and analyze the outcomes of your
     * submitted bulk email validations to gain insights into the quality of your email list.
     *
     */
    public function get(?\InfobipSDK\GetParams\Email\Resource2\Validations $params = null): \InfobipSDK\DTOs\N45c843446703ba5f4438a6f721c629420452796de20bd3dd9adfccde3ed2ffff\GetValidationPageResponse
    {
        /** @var \InfobipSDK\DTOs\N45c843446703ba5f4438a6f721c629420452796de20bd3dd9adfccde3ed2ffff\GetValidationPageResponse $result */
        $result = $this->executeArguments(self::operation(self::GET), parameters: $params);
        return $result;
    }

    private const array POST = [
        'method' => 'POST',
        'path' => '/email/2/validations',
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
            202,
        ],
        'errors' => [
            400 => '\\InfobipSDK\\DTOs\\Api\\Error',
            401 => '\\InfobipSDK\\DTOs\\Api\\Error',
            403 => '\\InfobipSDK\\DTOs\\Api\\Error',
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
            429 => [
                'type' => '\\InfobipSDK\\DTOs\\Api\\Error',
                'schemaNullable' => false,
            ],
            500 => [
                'type' => '\\InfobipSDK\\DTOs\\Api\\Error',
                'schemaNullable' => false,
            ],
        ],
        'responseType' => '\\InfobipSDK\\DTOs\\N45c843446703ba5f4438a6f721c629420452796de20bd3dd9adfccde3ed2ffff\\BulkResponse',
        'requestBody' => [
            'type' => '\\InfobipSDK\\DTOs\\N45c843446703ba5f4438a6f721c629420452796de20bd3dd9adfccde3ed2ffff\\ApiBulkRequest',
            'nullable' => false,
            'required' => true,
            'rules' => [],
        ],
    ];

    /**
     * Validate email addresses
     *
     * This method lets you request a bulk email address validation,
     * helping you to detect low-quality emails and tidy up your recipient list.
     *
     */
    public function post(\InfobipSDK\DTOs\N45c843446703ba5f4438a6f721c629420452796de20bd3dd9adfccde3ed2ffff\ApiBulkRequest $payload): \InfobipSDK\DTOs\N45c843446703ba5f4438a6f721c629420452796de20bd3dd9adfccde3ed2ffff\BulkResponse
    {
        /** @var \InfobipSDK\DTOs\N45c843446703ba5f4438a6f721c629420452796de20bd3dd9adfccde3ed2ffff\BulkResponse $result */
        $result = $this->executeBody(self::operation(self::POST), $payload);
        return $result;
    }

}
