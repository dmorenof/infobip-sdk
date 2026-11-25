<?php

declare(strict_types=1);

namespace InfobipSDK\Resources\NumberRegistration\Resource1;

final class Documents extends \InfobipSDK\Client
{
    private const array POST = [
        'method' => 'POST',
        'path' => '/number-registration/1/documents',
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
            400 => '\\InfobipSDK\\DTOs\\N8b2121dcd8344af6f8ffd883d0b652fbff554e4dff3cace0de1953d2985a5758\\ApiException',
            401 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            403 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            500 => '\\InfobipSDK\\DTOs\\Api\\Exception',
        ],
        'errorResponses' => [
            400 => [
                'type' => '\\InfobipSDK\\DTOs\\N8b2121dcd8344af6f8ffd883d0b652fbff554e4dff3cace0de1953d2985a5758\\ApiException',
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
            500 => [
                'type' => '\\InfobipSDK\\DTOs\\Api\\Exception',
                'schemaNullable' => false,
            ],
        ],
        'responseType' => '\\InfobipSDK\\DTOs\\N2700ea5ecfd0574f21019319e90eb63416ede8263eab67e466c718c51cd1a77a\\DocumentUploadMetadata',
        'requestMediaType' => 'multipart/form-data',
        'bodyParts' => [
            'applicationId' => [
                'contentType' => 'text/plain',
            ],
            'document' => [
                'contentType' => null,
                'filename' => 'document.bin',
            ],
            'entityId' => [
                'contentType' => 'text/plain',
            ],
        ],
    ];

    /**
     * Upload Document
     *
     * Uploads a document file to the system and returns the document metadata. The uploaded document can be used for 10DLC campaign registration purposes. Documents not attached to a campaign within 7 days will be automatically deleted. Supported file types: .bmp, .dib, .docx, .gif, .htm, .html, .jpeg, .jpg, .m2a, .m4a, .m4b, .m4p, .m4r, .m4v, .mp1, .mp2, .mp3, .mp4, .mpa, .oga, .ogg, .ogm, .ogv, .ogx, .odt, .pdf, .png, .raw, .rtf, .spx, .tif, .tiff, .txt, .wav, .webm, .xml, Maximum file size: 10MB.
     */
    public function post(?\InfobipSDK\PostParams\NumberRegistration\Resource1\Documents $params = null): \InfobipSDK\DTOs\N2700ea5ecfd0574f21019319e90eb63416ede8263eab67e466c718c51cd1a77a\DocumentUploadMetadata
    {
        /** @var \InfobipSDK\DTOs\N2700ea5ecfd0574f21019319e90eb63416ede8263eab67e466c718c51cd1a77a\DocumentUploadMetadata $result */
        $result = $this->executeArguments(self::operation(self::POST), parameters: $params);
        return $result;
    }

    private const array GET_BY_DOCUMENT_ID = [
        'method' => 'GET',
        'path' => '/number-registration/1/documents/{documentId}',
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
            401 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            403 => '\\InfobipSDK\\DTOs\\Api\\Exception',
            404 => null,
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
                'type' => 'string',
                'schemaNullable' => false,
                'mediaType' => '*/*',
            ],
            500 => [
                'type' => '\\InfobipSDK\\DTOs\\Api\\Exception',
                'schemaNullable' => false,
            ],
        ],
        'responseType' => '\\Psr\\Http\\Message\\ResponseInterface',
        'responseMediaType' => 'application/octet-stream',
        'responseEncoding' => 'binary',
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
     * Download Document
     *
     * Downloads a document file by its unique identifier. Access to the document is restricted based on account ownership.
     */
    public function getByDocumentId(string $documentId): \Psr\Http\Message\ResponseInterface
    {
        /** @var \Psr\Http\Message\ResponseInterface $result */
        $result = $this->executeArguments(self::operation(self::GET_BY_DOCUMENT_ID), path: ['documentId' => $documentId]);
        return $result;
    }
}
