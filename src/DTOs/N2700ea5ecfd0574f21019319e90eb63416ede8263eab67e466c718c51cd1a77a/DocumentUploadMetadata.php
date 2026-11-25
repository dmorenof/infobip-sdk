<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N2700ea5ecfd0574f21019319e90eb63416ede8263eab67e466c718c51cd1a77a;

/**
 * DocumentUploadMetadata
 */
final class DocumentUploadMetadata extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'contentType',
        'documentId',
        'documentName',
    ];

    protected const array VALIDATION = [
        'contentLength' => [
            'format' => 'int32',
        ],
    ];

    /**
     * CPaaS X property identifying an application, a use case or an environment on your system. It should only be set if you are using CPaaS X Applications with your traffic.
     */
    public string $applicationId;
    /**
     * Size of the document content in bytes.
     * Format: int32
     */
    public int $contentLength {
        set {
            $this->assigning('contentLength', $value);
            $this->contentLength = $value;
        }
    }
    /**
     * MIME type of the document content (e.g., application/pdf, image/png).
     */
    public string $contentType;
    /**
     * Unique identifier for the document.
     * Format: uuid
     */
    public string $documentId;
    /**
     * Name of the document file.
     */
    public string $documentName;
    /**
     * CPaaS X property identifying an unique actor on your system. Should only be set if you are using CPaaS X Applications with your traffic.
     */
    public string $entityId;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'applicationId' => is_string($value) ? $this->applicationId = $value : parent::assignMember($name, $value),
            'contentLength' => is_int($value) ? $this->contentLength = $value : parent::assignMember($name, $value),
            'contentType' => is_string($value) ? $this->contentType = $value : parent::assignMember($name, $value),
            'documentId' => is_string($value) ? $this->documentId = $value : parent::assignMember($name, $value),
            'documentName' => is_string($value) ? $this->documentName = $value : parent::assignMember($name, $value),
            'entityId' => is_string($value) ? $this->entityId = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
