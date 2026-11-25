<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N09ef6171198229ad9a73a413d2271afa3ba31b9abbd6cd8a0cc9563fd721f1ed;

/**
 * AttachmentDetailResponse
 */
final class AttachmentDetailResponse extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'contentType',
    'downloadPublicUrl',
    'id',
    'name',
    'scope',
    'sizeInBytes',
];

    /**
     * MIME type of the attachment.
     * Example: "application/pdf"
     */
    public string $contentType;
    /**
     * Public URL for downloading the attachment from CDN.
     * Example: "https://cdn.example.com/attachments/product-overview.pdf"
     */
    public string $downloadPublicUrl;
    /**
     * Unique identifier of the attachment.
     * Example: "3fa85f64-5717-4562-b3fc-2c963f66afa6"
     * Format: uuid
     */
    public string $id;
    /**
     * Name of the attachment.
     * Example: "product-overview.pdf"
     */
    public string $name;
    /**
     * Public URL for accessing the attachment in Public Content.
     * Example: "https://public.example.com/attachments/product-overview.pdf"
     */
    public string $publicContentUrl;
    public \InfobipSDK\Enums\N09ef6171198229ad9a73a413d2271afa3ba31b9abbd6cd8a0cc9563fd721f1ed\ContentScope $scope;
    /**
     * Size of the attachment in bytes.
     * Example: 1048576
     * Format: int64
     */
    public int $sizeInBytes;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'contentType' => is_string($value) ? $this->contentType = $value : parent::assignMember($name, $value),
            'downloadPublicUrl' => is_string($value) ? $this->downloadPublicUrl = $value : parent::assignMember($name, $value),
            'id' => is_string($value) ? $this->id = $value : parent::assignMember($name, $value),
            'name' => is_string($value) ? $this->name = $value : parent::assignMember($name, $value),
            'publicContentUrl' => is_string($value) ? $this->publicContentUrl = $value : parent::assignMember($name, $value),
            'scope' => is_string($value) ? $this->scope = \InfobipSDK\Enums\N09ef6171198229ad9a73a413d2271afa3ba31b9abbd6cd8a0cc9563fd721f1ed\ContentScope::from($value) : parent::assignMember($name, $value),
            'sizeInBytes' => is_int($value) ? $this->sizeInBytes = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
