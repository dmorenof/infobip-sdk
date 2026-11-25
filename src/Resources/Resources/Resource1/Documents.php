<?php

declare(strict_types=1);

namespace InfobipSDK\Resources\Resources\Resource1;

final class Documents extends \InfobipSDK\Client
{
    private const array POST = [
        'method' => 'POST',
        'path' => '/resources/1/documents',
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
            201,
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
        'responseType' => '\\InfobipSDK\\DTOs\\C8df889022018062dfcb44e930a391e7e1c8e669bd11a10a717da508b9ae3dcf\\DocumentIdentifier',
        'responseHeaders' => [
            201 => [
                'Location' => [
                    'type' => 'string',
                ],
            ],
        ],
        'requestMediaType' => 'multipart/form-data',
        'bodyParts' => [
            'document' => [
                'contentType' => null,
                'filename' => 'document.bin',
            ],
        ],
    ];

    /**
     * Upload document
     *
     * Upload a document prior to providing it as a requirement within a resource request.
     */
    public function post(?\InfobipSDK\DTOs\C8df889022018062dfcb44e930a391e7e1c8e669bd11a10a717da508b9ae3dcf\UploadDocumentApiDoc $payload = null): \InfobipSDK\DTOs\C8df889022018062dfcb44e930a391e7e1c8e669bd11a10a717da508b9ae3dcf\DocumentIdentifier
    {
        /** @var \InfobipSDK\DTOs\C8df889022018062dfcb44e930a391e7e1c8e669bd11a10a717da508b9ae3dcf\DocumentIdentifier $result */
        $result = $this->executeArguments(self::operation(self::POST), body: $payload);
        return $result;
    }

    private const array DELETE_BY_DOCUMENT_ID = [
        'method' => 'DELETE',
        'path' => '/resources/1/documents/{documentId}',
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
            204,
        ],
        'errors' => [
            401 => '\\InfobipSDK\\DTOs\\Api\\Error',
            403 => '\\InfobipSDK\\DTOs\\Api\\Error',
            404 => '\\InfobipSDK\\DTOs\\Api\\Error',
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
    ];

    /**
     * Delete document
     *
     * Delete a document you have previously uploaded.
     */
    public function deleteByDocumentId(string $documentId): void
    {
        $this->executeArguments(self::operation(self::DELETE_BY_DOCUMENT_ID), path: ['documentId' => $documentId]);
        return;
    }

    private const array GET_BY_DOCUMENT_ID = [
        'method' => 'GET',
        'path' => '/resources/1/documents/{documentId}',
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
            401 => '\\InfobipSDK\\DTOs\\Api\\Error',
            403 => '\\InfobipSDK\\DTOs\\Api\\Error',
            404 => '\\InfobipSDK\\DTOs\\Api\\Error',
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
        'responseMediaType' => '*/*',
        'responseHeaders' => [
            200 => [
                'Content-Disposition' => [
                    'type' => 'string',
                ],
                'Content-Length' => [
                    'type' => 'integer',
                ],
            ],
        ],
    ];

    /**
     * Download document
     *
     * Download a requirement supporting document (template or sample), a document prefilled by Infobip for your resource request (document type `PREFILLED_DOCUMENT` in the resource request requirements), or a document you have previously uploaded.
     */
    public function getByDocumentId(string $documentId): string
    {
        /** @var string $result */
        $result = $this->executeArguments(self::operation(self::GET_BY_DOCUMENT_ID), path: ['documentId' => $documentId]);
        return $result;
    }

}
