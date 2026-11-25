<?php

declare(strict_types=1);

namespace InfobipSDK\Resources\Resource1;

final class Documents extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** POST /resources/1/documents [operationId: upload-document] */
    /**
     * Upload document
     *
     * Upload a document prior to providing it as a requirement within a resource request.
     */
    public static function post(?\InfobipSDK\DTOs\C8df889022018062dfcb44e930a391e7e1c8e669bd11a10a717da508b9ae3dcf\UploadDocumentApiDoc $payload = null): \InfobipSDK\DTOs\C8df889022018062dfcb44e930a391e7e1c8e669bd11a10a717da508b9ae3dcf\DocumentIdentifier
    {
        return self::client()->resource(\InfobipSDK\Resources\Resources\Resource1\Documents::class)->post($payload);
    }

    /** DELETE /resources/1/documents/{documentId} [operationId: delete-document] */
    /**
     * Delete document
     *
     * Delete a document you have previously uploaded.
     */
    public static function deleteByDocumentId(string $documentId): void
    {
        self::client()->resource(\InfobipSDK\Resources\Resources\Resource1\Documents::class)->deleteByDocumentId($documentId);
    }

    /** GET /resources/1/documents/{documentId} [operationId: download-document] */
    /**
     * Download document
     *
     * Download a requirement supporting document (template or sample), a document prefilled by Infobip for your resource request (document type `PREFILLED_DOCUMENT` in the resource request requirements), or a document you have previously uploaded.
     */
    public static function getByDocumentId(string $documentId): string
    {
        return self::client()->resource(\InfobipSDK\Resources\Resources\Resource1\Documents::class)->getByDocumentId($documentId);
    }
}
