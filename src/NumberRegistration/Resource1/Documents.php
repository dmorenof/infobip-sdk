<?php

declare(strict_types=1);

namespace InfobipSDK\NumberRegistration\Resource1;

final class Documents extends \InfobipSDK\InfobipOpenAPISpecificationSDK
{
    /** POST /number-registration/1/documents [operationId: upload-document-metadata] */
    /**
     * Upload Document
     *
     * Uploads a document file to the system and returns the document metadata. The uploaded document can be used for 10DLC campaign registration purposes. Documents not attached to a campaign within 7 days will be automatically deleted. Supported file types: .bmp, .dib, .docx, .gif, .htm, .html, .jpeg, .jpg, .m2a, .m4a, .m4b, .m4p, .m4r, .m4v, .mp1, .mp2, .mp3, .mp4, .mpa, .oga, .ogg, .ogm, .ogv, .ogx, .odt, .pdf, .png, .raw, .rtf, .spx, .tif, .tiff, .txt, .wav, .webm, .xml, Maximum file size: 10MB.
     */
    public static function post(?\InfobipSDK\PostParams\NumberRegistration\Resource1\Documents $params = null): \InfobipSDK\DTOs\N2700ea5ecfd0574f21019319e90eb63416ede8263eab67e466c718c51cd1a77a\DocumentUploadMetadata
    {
        return self::client()->resource(\InfobipSDK\Resources\NumberRegistration\Resource1\Documents::class)->post($params);
    }

    /** GET /number-registration/1/documents/{documentId} [operationId: download-document-content] */
    /**
     * Download Document
     *
     * Downloads a document file by its unique identifier. Access to the document is restricted based on account ownership.
     */
    public static function getByDocumentId(string $documentId): \Psr\Http\Message\ResponseInterface
    {
        return self::client()->resource(\InfobipSDK\Resources\NumberRegistration\Resource1\Documents::class)->getByDocumentId($documentId);
    }
}
