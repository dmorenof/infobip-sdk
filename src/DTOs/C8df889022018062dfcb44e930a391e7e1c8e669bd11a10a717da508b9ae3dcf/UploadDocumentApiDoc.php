<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\C8df889022018062dfcb44e930a391e7e1c8e669bd11a10a717da508b9ae3dcf;

/**
 * UploadDocumentApiDoc
 */
final class UploadDocumentApiDoc extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'document',
];

    /**
     * The document file you want to upload. Supported file formats: .doc, .docx, .jpg, .jpeg, .png, .pdf, .xls, .xlsx, .mp4, .avi, .mov, .webm
     * Format: binary
     */
    public string|\Psr\Http\Message\UploadedFileInterface $document;

}
