<?php

declare(strict_types=1);

namespace InfobipSDK\Resources\Webrtc\Resource1;

final class Files extends \InfobipSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/webrtc/1/files',
        'security' => [
            [
                'IBSSOTokenHeader' => [],
            ],
            [
                'APIKeyHeader' => [],
            ],
            [
                'Basic' => [],
            ],
            [
                'OAuth2' => [],
            ],
        ],
        'errors' => [
            400 => '\\InfobipSDK\\DTOs\\N394de68b2af4916e47f48a4cc3026c2ec4c22342d1304c00a584d14a92a333c1\\ApiException',
            401 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            403 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            429 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            500 => '\\InfobipSDK\\DTOs\\Api\\Exception',
        ],
        'errorResponses' => [
            400 => [
                'type' => '\\InfobipSDK\\DTOs\\N394de68b2af4916e47f48a4cc3026c2ec4c22342d1304c00a584d14a92a333c1\\ApiException',
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
        'responseType' => '\\InfobipSDK\\DTOs\\Ffb4c29a0ab7c4ca15544ca9d6ceffaf3e8b394d7fc1a53728ba61496b4513fc\\FilePageResponse',
    ];

    /**
     * Get files
     *
     * Use this method to get files with pagination.
     */
    public function get(?\InfobipSDK\GetParams\Webrtc\Resource1\Files $params = null): \InfobipSDK\DTOs\Ffb4c29a0ab7c4ca15544ca9d6ceffaf3e8b394d7fc1a53728ba61496b4513fc\FilePageResponse
    {
        /** @var \InfobipSDK\DTOs\Ffb4c29a0ab7c4ca15544ca9d6ceffaf3e8b394d7fc1a53728ba61496b4513fc\FilePageResponse $result */
        $result = $this->executeArguments(self::operation(self::GET), parameters: $params);
        return $result;
    }

    private const array DELETE_BY_ID = [
        'method' => 'DELETE',
        'path' => '/webrtc/1/files/{id}',
        'security' => [
            [
                'IBSSOTokenHeader' => [],
            ],
            [
                'APIKeyHeader' => [],
            ],
            [
                'Basic' => [],
            ],
            [
                'OAuth2' => [],
            ],
        ],
        'errors' => [
            401 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            403 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            404 => '\\InfobipSDK\\DTOs\\N394de68b2af4916e47f48a4cc3026c2ec4c22342d1304c00a584d14a92a333c1\\ApiException',
            429 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            500 => '\\InfobipSDK\\DTOs\\Api\\Exception',
        ],
        'errorResponses' => [
            401 => [
                'type' => '\\InfobipSDK\\DTOs\\Api\\Exception',
                'schemaNullable' => false,
            ],
            403 => [
                'type' => '\\InfobipSDK\\DTOs\\Api\\Exception',
                'schemaNullable' => false,
            ],
            404 => [
                'type' => '\\InfobipSDK\\DTOs\\N394de68b2af4916e47f48a4cc3026c2ec4c22342d1304c00a584d14a92a333c1\\ApiException',
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
        'responseType' => '\\InfobipSDK\\DTOs\\Ffb4c29a0ab7c4ca15544ca9d6ceffaf3e8b394d7fc1a53728ba61496b4513fc\\FileResponse',
    ];

    /**
     * Delete file
     *
     * Use this method to delete a file.
     */
    public function deleteById(string $id): \InfobipSDK\DTOs\Ffb4c29a0ab7c4ca15544ca9d6ceffaf3e8b394d7fc1a53728ba61496b4513fc\FileResponse
    {
        /** @var \InfobipSDK\DTOs\Ffb4c29a0ab7c4ca15544ca9d6ceffaf3e8b394d7fc1a53728ba61496b4513fc\FileResponse $result */
        $result = $this->executeArguments(self::operation(self::DELETE_BY_ID), path: ['id' => $id]);
        return $result;
    }

    private const array GET_BY_ID = [
        'method' => 'GET',
        'path' => '/webrtc/1/files/{id}',
        'security' => [
            [
                'IBSSOTokenHeader' => [],
            ],
            [
                'APIKeyHeader' => [],
            ],
            [
                'Basic' => [],
            ],
            [
                'OAuth2' => [],
            ],
        ],
        'errors' => [
            401 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            403 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            404 => '\\InfobipSDK\\DTOs\\N394de68b2af4916e47f48a4cc3026c2ec4c22342d1304c00a584d14a92a333c1\\ApiException',
            429 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            500 => '\\InfobipSDK\\DTOs\\Api\\Exception',
        ],
        'errorResponses' => [
            401 => [
                'type' => '\\InfobipSDK\\DTOs\\Api\\Exception',
                'schemaNullable' => false,
            ],
            403 => [
                'type' => '\\InfobipSDK\\DTOs\\Api\\Exception',
                'schemaNullable' => false,
            ],
            404 => [
                'type' => '\\InfobipSDK\\DTOs\\N394de68b2af4916e47f48a4cc3026c2ec4c22342d1304c00a584d14a92a333c1\\ApiException',
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
        'responseType' => '\\InfobipSDK\\DTOs\\Ffb4c29a0ab7c4ca15544ca9d6ceffaf3e8b394d7fc1a53728ba61496b4513fc\\FileResponse',
    ];

    /**
     * Get file
     *
     * Use this method to get a single file.
     */
    public function getById(string $id): \InfobipSDK\DTOs\Ffb4c29a0ab7c4ca15544ca9d6ceffaf3e8b394d7fc1a53728ba61496b4513fc\FileResponse
    {
        /** @var \InfobipSDK\DTOs\Ffb4c29a0ab7c4ca15544ca9d6ceffaf3e8b394d7fc1a53728ba61496b4513fc\FileResponse $result */
        $result = $this->executeArguments(self::operation(self::GET_BY_ID), path: ['id' => $id]);
        return $result;
    }

}
