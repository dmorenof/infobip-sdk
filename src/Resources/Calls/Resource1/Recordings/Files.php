<?php

declare(strict_types=1);

namespace InfobipSDK\Resources\Calls\Resource1\Recordings;

final class Files extends \InfobipSDK\Client
{
    private const array DELETE_BY_FILE_ID = [
        'method' => 'DELETE',
        'path' => '/calls/1/recordings/files/{fileId}',
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
            404 => '\\InfobipSDK\\DTOs\\E8b4ac5a98b4fdd5509637ee70be50d1c508e5a4c9ac2c19485e7cdc7eb9bd4e\\ApiException',
            429 => '\\InfobipSDK\\DTOs\\E8b4ac5a98b4fdd5509637ee70be50d1c508e5a4c9ac2c19485e7cdc7eb9bd4e\\ApiException',
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
                'type' => '\\InfobipSDK\\DTOs\\E8b4ac5a98b4fdd5509637ee70be50d1c508e5a4c9ac2c19485e7cdc7eb9bd4e\\ApiException',
                'schemaNullable' => false,
            ],
            429 => [
                'type' => '\\InfobipSDK\\DTOs\\E8b4ac5a98b4fdd5509637ee70be50d1c508e5a4c9ac2c19485e7cdc7eb9bd4e\\ApiException',
                'schemaNullable' => false,
            ],
            500 => [
                'type' => '\\InfobipSDK\\DTOs\\Api\\Exception',
                'schemaNullable' => false,
            ],
        ],
        'responseType' => '\\InfobipSDK\\DTOs\\A8c993b4bcabd2960dfaf3986394e0fe85cd1c09dc98b0a81b51403a00c8f97c\\PublicRecordingFile',
    ];

    /**
     * Delete recording file
     *
     * Delete a single file from a call or conference recording. The call or conference recording metadata will still exist after deleting the file, but the file will not show up anymore in the file list of that call or conference recording.
     */
    public function deleteByFileId(string $fileId, ?\InfobipSDK\DeleteParams\Calls\Resource1\Recordings\Files\ByFileId $params = null): \InfobipSDK\DTOs\A8c993b4bcabd2960dfaf3986394e0fe85cd1c09dc98b0a81b51403a00c8f97c\PublicRecordingFile
    {
        /** @var \InfobipSDK\DTOs\A8c993b4bcabd2960dfaf3986394e0fe85cd1c09dc98b0a81b51403a00c8f97c\PublicRecordingFile $result */
        $result = $this->executeArguments(self::operation(self::DELETE_BY_FILE_ID), path: ['fileId' => $fileId], parameters: $params);
        return $result;
    }

    private const array GET_BY_FILE_ID = [
        'method' => 'GET',
        'path' => '/calls/1/recordings/files/{fileId}',
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
        'success' => [
            200,
            206,
        ],
        'errors' => [
            401 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            403 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            404 => '\\InfobipSDK\\DTOs\\E8b4ac5a98b4fdd5509637ee70be50d1c508e5a4c9ac2c19485e7cdc7eb9bd4e\\ApiException',
            416 => '\\InfobipSDK\\DTOs\\E8b4ac5a98b4fdd5509637ee70be50d1c508e5a4c9ac2c19485e7cdc7eb9bd4e\\ApiException',
            429 => '\\InfobipSDK\\DTOs\\E8b4ac5a98b4fdd5509637ee70be50d1c508e5a4c9ac2c19485e7cdc7eb9bd4e\\ApiException',
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
                'type' => '\\InfobipSDK\\DTOs\\E8b4ac5a98b4fdd5509637ee70be50d1c508e5a4c9ac2c19485e7cdc7eb9bd4e\\ApiException',
                'schemaNullable' => false,
            ],
            416 => [
                'type' => '\\InfobipSDK\\DTOs\\E8b4ac5a98b4fdd5509637ee70be50d1c508e5a4c9ac2c19485e7cdc7eb9bd4e\\ApiException',
                'schemaNullable' => false,
            ],
            429 => [
                'type' => '\\InfobipSDK\\DTOs\\E8b4ac5a98b4fdd5509637ee70be50d1c508e5a4c9ac2c19485e7cdc7eb9bd4e\\ApiException',
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
     * Download a recording file.
     */
    public function getByFileId(string $fileId, ?\InfobipSDK\GetParams\Calls\Resource1\Recordings\Files\ByFileId $params = null): \Psr\Http\Message\ResponseInterface
    {
        /** @var \Psr\Http\Message\ResponseInterface $result */
        $result = $this->executeArguments(self::operation(self::GET_BY_FILE_ID), path: ['fileId' => $fileId], parameters: $params);
        return $result;
    }

}
