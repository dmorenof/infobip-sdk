<?php

declare(strict_types=1);

namespace InfobipSDK\Resources\Email\Resource2;

final class Validation extends \InfobipSDK\Client
{
    private const array POST = [
        'method' => 'POST',
        'path' => '/email/2/validation',
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
            400 => '\\InfobipSDK\\DTOs\\Febb9d147c03fd2fbfd3c2210892c186364d60568040914121c07343344b284b\\ApiException',
            401 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            403 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            429 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            500 => '\\InfobipSDK\\DTOs\\Api\\Exception',
        ],
        'errorResponses' => [
            400 => [
                'type' => '\\InfobipSDK\\DTOs\\Febb9d147c03fd2fbfd3c2210892c186364d60568040914121c07343344b284b\\ApiException',
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
        'responseType' => '\\InfobipSDK\\DTOs\\N45c843446703ba5f4438a6f721c629420452796de20bd3dd9adfccde3ed2ffff\\ValidationResponse',
        'requestBody' => [
            'type' => '\\InfobipSDK\\DTOs\\N45c843446703ba5f4438a6f721c629420452796de20bd3dd9adfccde3ed2ffff\\ValidationRequest',
            'nullable' => false,
            'required' => false,
            'rules' => [],
        ],
    ];

    /**
     * Validate email address
     *
     * This method lets you request validation of a single email address in real-time,
     * helping you to identify and remove poor-quality emails from your list.
     *
     */
    public function post(?\InfobipSDK\DTOs\N45c843446703ba5f4438a6f721c629420452796de20bd3dd9adfccde3ed2ffff\ValidationRequest $payload = null): \InfobipSDK\DTOs\N45c843446703ba5f4438a6f721c629420452796de20bd3dd9adfccde3ed2ffff\ValidationResponse
    {
        /** @var \InfobipSDK\DTOs\N45c843446703ba5f4438a6f721c629420452796de20bd3dd9adfccde3ed2ffff\ValidationResponse $result */
        $result = func_num_args() > 0 ? $this->executeBody(self::operation(self::POST), $payload) : $this->executeArguments(self::operation(self::POST));
        return $result;
    }

}
