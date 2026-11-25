<?php

declare(strict_types=1);

namespace InfobipSDK\NumberRegistration\Resource1\Documents\ByDocumentId;

final class Metadata extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** GET /number-registration/1/documents/{documentId}/metadata [operationId: get-document-metadata] */
    /**
     * Get Document Metadata
     *
     * Retrieves metadata for a document by its unique identifier, without downloading its content. Access to the document is restricted based on account ownership.
     */
    public static function get(string $documentId): \InfobipSDK\DTOs\N2700ea5ecfd0574f21019319e90eb63416ede8263eab67e466c718c51cd1a77a\DocumentUploadMetadata
    {
        return self::client()->resource(\InfobipSDK\Resources\NumberRegistration\Resource1\Documents\ByDocumentId\Metadata::class)->get($documentId);
    }
}
