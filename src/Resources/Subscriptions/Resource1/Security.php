<?php

declare(strict_types=1);

namespace InfobipSDK\Resources\Subscriptions\Resource1;

final class Security extends \InfobipSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/subscriptions/1/security',
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
            400 => '\\InfobipSDK\\DTOs\\D20db567f3e57223af6c81b075b50f0bc0d564bb5690e0ef2603138160aca7f3\\ApiException',
            401 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            403 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            404 => '\\InfobipSDK\\DTOs\\D20db567f3e57223af6c81b075b50f0bc0d564bb5690e0ef2603138160aca7f3\\ApiException',
            429 => '\\InfobipSDK\\DTOs\\D20db567f3e57223af6c81b075b50f0bc0d564bb5690e0ef2603138160aca7f3\\ApiException',
            500 => '\\InfobipSDK\\DTOs\\Api\\Exception',
        ],
        'errorResponses' => [
            400 => [
                'type' => '\\InfobipSDK\\DTOs\\D20db567f3e57223af6c81b075b50f0bc0d564bb5690e0ef2603138160aca7f3\\ApiException',
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
            404 => [
                'type' => '\\InfobipSDK\\DTOs\\D20db567f3e57223af6c81b075b50f0bc0d564bb5690e0ef2603138160aca7f3\\ApiException',
                'schemaNullable' => false,
            ],
            429 => [
                'type' => '\\InfobipSDK\\DTOs\\D20db567f3e57223af6c81b075b50f0bc0d564bb5690e0ef2603138160aca7f3\\ApiException',
                'schemaNullable' => false,
            ],
            500 => [
                'type' => '\\InfobipSDK\\DTOs\\Api\\Exception',
                'schemaNullable' => false,
            ],
        ],
        'responseType' => '\\InfobipSDK\\DTOs\\N6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f\\SecurityPage',
    ];

    /**
     * Get security settings
     *
     * Returns a list of security settings for your account with pagination.
     */
    public function get(?\InfobipSDK\GetParams\Subscriptions\Resource1\Security $params = null): \InfobipSDK\DTOs\N6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f\SecurityPage
    {
        /** @var \InfobipSDK\DTOs\N6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f\SecurityPage $result */
        $result = $this->executeArguments(self::operation(self::GET), parameters: $params);
        return $result;
    }

    private const array POST = [
        'method' => 'POST',
        'path' => '/subscriptions/1/security',
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
            400 => '\\InfobipSDK\\DTOs\\D20db567f3e57223af6c81b075b50f0bc0d564bb5690e0ef2603138160aca7f3\\ApiException',
            401 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            403 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            404 => '\\InfobipSDK\\DTOs\\D20db567f3e57223af6c81b075b50f0bc0d564bb5690e0ef2603138160aca7f3\\ApiException',
            429 => '\\InfobipSDK\\DTOs\\D20db567f3e57223af6c81b075b50f0bc0d564bb5690e0ef2603138160aca7f3\\ApiException',
            500 => '\\InfobipSDK\\DTOs\\Api\\Exception',
        ],
        'errorResponses' => [
            400 => [
                'type' => '\\InfobipSDK\\DTOs\\D20db567f3e57223af6c81b075b50f0bc0d564bb5690e0ef2603138160aca7f3\\ApiException',
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
            404 => [
                'type' => '\\InfobipSDK\\DTOs\\D20db567f3e57223af6c81b075b50f0bc0d564bb5690e0ef2603138160aca7f3\\ApiException',
                'schemaNullable' => false,
            ],
            429 => [
                'type' => '\\InfobipSDK\\DTOs\\D20db567f3e57223af6c81b075b50f0bc0d564bb5690e0ef2603138160aca7f3\\ApiException',
                'schemaNullable' => false,
            ],
            500 => [
                'type' => '\\InfobipSDK\\DTOs\\Api\\Exception',
                'schemaNullable' => false,
            ],
        ],
        'responseType' => '\\InfobipSDK\\DTOs\\N6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f\\IdOnlySecurityResponse',
        'responseHeaders' => [
            201 => [
                'Location' => [
                    'type' => 'string',
                ],
            ],
        ],
        'requestBody' => [
            'type' => '\\InfobipSDK\\DTOs\\N6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f\\SecurityRequest',
            'nullable' => false,
            'required' => true,
            'rules' => [],
        ],
    ];

    /**
     * Create security settings
     *
     * This method will create new security settings.
     */
    public function post(\InfobipSDK\DTOs\N6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f\SecurityRequest $payload): \InfobipSDK\DTOs\N6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f\IdOnlySecurityResponse
    {
        /** @var \InfobipSDK\DTOs\N6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f\IdOnlySecurityResponse $result */
        $result = $this->executeBody(self::operation(self::POST), $payload);
        return $result;
    }

    private const array DELETE_BY_AUTH_ID = [
        'method' => 'DELETE',
        'path' => '/subscriptions/1/security/{authId}',
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
            400 => '\\InfobipSDK\\DTOs\\D20db567f3e57223af6c81b075b50f0bc0d564bb5690e0ef2603138160aca7f3\\ApiException',
            401 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            403 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            404 => '\\InfobipSDK\\DTOs\\D20db567f3e57223af6c81b075b50f0bc0d564bb5690e0ef2603138160aca7f3\\ApiException',
            429 => '\\InfobipSDK\\DTOs\\D20db567f3e57223af6c81b075b50f0bc0d564bb5690e0ef2603138160aca7f3\\ApiException',
            500 => '\\InfobipSDK\\DTOs\\Api\\Exception',
        ],
        'errorResponses' => [
            400 => [
                'type' => '\\InfobipSDK\\DTOs\\D20db567f3e57223af6c81b075b50f0bc0d564bb5690e0ef2603138160aca7f3\\ApiException',
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
            404 => [
                'type' => '\\InfobipSDK\\DTOs\\D20db567f3e57223af6c81b075b50f0bc0d564bb5690e0ef2603138160aca7f3\\ApiException',
                'schemaNullable' => false,
            ],
            429 => [
                'type' => '\\InfobipSDK\\DTOs\\D20db567f3e57223af6c81b075b50f0bc0d564bb5690e0ef2603138160aca7f3\\ApiException',
                'schemaNullable' => false,
            ],
            500 => [
                'type' => '\\InfobipSDK\\DTOs\\Api\\Exception',
                'schemaNullable' => false,
            ],
        ],
        'responseType' => '\\InfobipSDK\\DTOs\\N6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f\\IdOnlySecurityResponse',
    ];

    /**
     * Delete security settings
     *
     * This method will delete the security settings item by ID.
     */
    public function deleteByAuthId(string $authId): \InfobipSDK\DTOs\N6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f\IdOnlySecurityResponse
    {
        /** @var \InfobipSDK\DTOs\N6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f\IdOnlySecurityResponse $result */
        $result = $this->executeArguments(self::operation(self::DELETE_BY_AUTH_ID), path: ['authId' => $authId]);
        return $result;
    }

    private const array GET_BY_AUTH_ID = [
        'method' => 'GET',
        'path' => '/subscriptions/1/security/{authId}',
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
            400 => '\\InfobipSDK\\DTOs\\D20db567f3e57223af6c81b075b50f0bc0d564bb5690e0ef2603138160aca7f3\\ApiException',
            401 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            403 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            404 => '\\InfobipSDK\\DTOs\\D20db567f3e57223af6c81b075b50f0bc0d564bb5690e0ef2603138160aca7f3\\ApiException',
            429 => '\\InfobipSDK\\DTOs\\D20db567f3e57223af6c81b075b50f0bc0d564bb5690e0ef2603138160aca7f3\\ApiException',
            500 => '\\InfobipSDK\\DTOs\\Api\\Exception',
        ],
        'errorResponses' => [
            400 => [
                'type' => '\\InfobipSDK\\DTOs\\D20db567f3e57223af6c81b075b50f0bc0d564bb5690e0ef2603138160aca7f3\\ApiException',
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
            404 => [
                'type' => '\\InfobipSDK\\DTOs\\D20db567f3e57223af6c81b075b50f0bc0d564bb5690e0ef2603138160aca7f3\\ApiException',
                'schemaNullable' => false,
            ],
            429 => [
                'type' => '\\InfobipSDK\\DTOs\\D20db567f3e57223af6c81b075b50f0bc0d564bb5690e0ef2603138160aca7f3\\ApiException',
                'schemaNullable' => false,
            ],
            500 => [
                'type' => '\\InfobipSDK\\DTOs\\Api\\Exception',
                'schemaNullable' => false,
            ],
        ],
        'responseType' => '\\InfobipSDK\\DTOs\\N6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f\\SecurityResponse',
    ];

    /**
     * Get single security settings
     *
     * Returns specific security settings item by ID.
     */
    public function getByAuthId(string $authId): \InfobipSDK\DTOs\N6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f\SecurityResponse
    {
        /** @var \InfobipSDK\DTOs\N6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f\SecurityResponse $result */
        $result = $this->executeArguments(self::operation(self::GET_BY_AUTH_ID), path: ['authId' => $authId]);
        return $result;
    }

    private const array PUT_BY_AUTH_ID = [
        'method' => 'PUT',
        'path' => '/subscriptions/1/security/{authId}',
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
            400 => '\\InfobipSDK\\DTOs\\D20db567f3e57223af6c81b075b50f0bc0d564bb5690e0ef2603138160aca7f3\\ApiException',
            401 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            403 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            404 => '\\InfobipSDK\\DTOs\\D20db567f3e57223af6c81b075b50f0bc0d564bb5690e0ef2603138160aca7f3\\ApiException',
            429 => '\\InfobipSDK\\DTOs\\D20db567f3e57223af6c81b075b50f0bc0d564bb5690e0ef2603138160aca7f3\\ApiException',
            500 => '\\InfobipSDK\\DTOs\\Api\\Exception',
        ],
        'errorResponses' => [
            400 => [
                'type' => '\\InfobipSDK\\DTOs\\D20db567f3e57223af6c81b075b50f0bc0d564bb5690e0ef2603138160aca7f3\\ApiException',
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
            404 => [
                'type' => '\\InfobipSDK\\DTOs\\D20db567f3e57223af6c81b075b50f0bc0d564bb5690e0ef2603138160aca7f3\\ApiException',
                'schemaNullable' => false,
            ],
            429 => [
                'type' => '\\InfobipSDK\\DTOs\\D20db567f3e57223af6c81b075b50f0bc0d564bb5690e0ef2603138160aca7f3\\ApiException',
                'schemaNullable' => false,
            ],
            500 => [
                'type' => '\\InfobipSDK\\DTOs\\Api\\Exception',
                'schemaNullable' => false,
            ],
        ],
        'responseType' => '\\InfobipSDK\\DTOs\\N6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f\\IdOnlySecurityResponse',
        'requestBody' => [
            'type' => '\\InfobipSDK\\DTOs\\N6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f\\NoIdSecurityRequest',
            'nullable' => false,
            'required' => true,
            'rules' => [],
        ],
    ];

    /**
     * Update security settings
     *
     * This method allows you to update the security settings.
     */
    public function putByAuthId(string $authId, \InfobipSDK\DTOs\N6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f\NoIdSecurityRequest $payload): \InfobipSDK\DTOs\N6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f\IdOnlySecurityResponse
    {
        /** @var \InfobipSDK\DTOs\N6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f\IdOnlySecurityResponse $result */
        $result = $this->executeBody(self::operation(self::PUT_BY_AUTH_ID), $payload, path: ['authId' => $authId]);
        return $result;
    }

}
