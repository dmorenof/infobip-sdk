<?php

declare(strict_types=1);

namespace InfobipSDK\Resources\CallLink\Resource1\Recordings;

final class Files extends \InfobipSDK\Client
{
    private const array GET_BY_FILE_ID = [
        'method' => 'GET',
        'path' => '/call-link/1/recordings/files/{fileId}',
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
            400 => '\\InfobipSDK\\DTOs\\E7089e7463ca9bbf5ccd1fc35b7db93dfead631972de2930bb5def17a2b45bf6\\ApiException',
            401 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            403 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            404 => '\\InfobipSDK\\DTOs\\E7089e7463ca9bbf5ccd1fc35b7db93dfead631972de2930bb5def17a2b45bf6\\ApiException',
            429 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            500 => '\\InfobipSDK\\DTOs\\Api\\Exception',
        ],
        'errorResponses' => [
            400 => [
                'type' => '\\InfobipSDK\\DTOs\\E7089e7463ca9bbf5ccd1fc35b7db93dfead631972de2930bb5def17a2b45bf6\\ApiException',
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
                'type' => '\\InfobipSDK\\DTOs\\E7089e7463ca9bbf5ccd1fc35b7db93dfead631972de2930bb5def17a2b45bf6\\ApiException',
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
        'responseType' => '\\Psr\\Http\\Message\\ResponseInterface',
        'responseMediaType' => 'application/octet-stream',
        'responseEncoding' => 'binary',
    ];

    /**
     * Download a recording file
     *
     * Use this method to download a recording file by its ID.
     */
    public function getByFileId(string $fileId, ?\InfobipSDK\GetParams\CallLink\Resource1\Recordings\Files\ByFileId $params = null): \Psr\Http\Message\ResponseInterface
    {
        /** @var \Psr\Http\Message\ResponseInterface $result */
        $result = $this->executeArguments(self::operation(self::GET_BY_FILE_ID), path: ['fileId' => $fileId], parameters: $params);
        return $result;
    }

}
