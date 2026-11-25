<?php

declare(strict_types=1);

namespace InfobipSDK\Resources\Markuplanguage\Resource1\Recordings;

final class Files extends \InfobipSDK\Client
{
    private const array GET_BY_FILE_ID = [
        'method' => 'GET',
        'path' => '/markuplanguage/1/recordings/files/{fileId}',
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
            400 => '\\InfobipSDK\\DTOs\\N1a32a5811401e5289f9edb3a3b051fee21e1ffff7ad179f3aead79d4a871821d\\ApiException',
            401 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            403 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            404 => '\\InfobipSDK\\DTOs\\N1a32a5811401e5289f9edb3a3b051fee21e1ffff7ad179f3aead79d4a871821d\\ApiException',
            429 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            500 => '\\InfobipSDK\\DTOs\\Api\\Exception',
        ],
        'errorResponses' => [
            400 => [
                'type' => '\\InfobipSDK\\DTOs\\N1a32a5811401e5289f9edb3a3b051fee21e1ffff7ad179f3aead79d4a871821d\\ApiException',
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
                'type' => '\\InfobipSDK\\DTOs\\N1a32a5811401e5289f9edb3a3b051fee21e1ffff7ad179f3aead79d4a871821d\\ApiException',
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
     * Download recording file
     *
     * Download a Calls Markup Language recording file.
     */
    public function getByFileId(string $fileId, ?\InfobipSDK\GetParams\Markuplanguage\Resource1\Recordings\Files\ByFileId $params = null): \Psr\Http\Message\ResponseInterface
    {
        /** @var \Psr\Http\Message\ResponseInterface $result */
        $result = $this->executeArguments(self::operation(self::GET_BY_FILE_ID), path: ['fileId' => $fileId], parameters: $params);
        return $result;
    }
}
