<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\E89661b226e518f36a162935afcdf1132c95b0e63e9c86c5ef5f31c5a8d865a2;

/**
 * TemplateFileApiResponse
 *
 * List of template attachments.
 */
final class TemplateFileApiResponse extends \Dmorenof\SdkRuntime\DTO
{
    public string $contentType;
    public string $fileExtension;
    public string $fileName;
    /**
     * Format: int64
     */
    public int $fileSize;
    public string $id;
    public string $publicLink;
    public string $thumbLink;
    /**
     * Format: date-time
     */
    public string $uploadedAt;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'contentType' => is_string($value) ? $this->contentType = $value : parent::assignMember($name, $value),
            'fileExtension' => is_string($value) ? $this->fileExtension = $value : parent::assignMember($name, $value),
            'fileName' => is_string($value) ? $this->fileName = $value : parent::assignMember($name, $value),
            'fileSize' => is_int($value) ? $this->fileSize = $value : parent::assignMember($name, $value),
            'id' => is_string($value) ? $this->id = $value : parent::assignMember($name, $value),
            'publicLink' => is_string($value) ? $this->publicLink = $value : parent::assignMember($name, $value),
            'thumbLink' => is_string($value) ? $this->thumbLink = $value : parent::assignMember($name, $value),
            'uploadedAt' => is_string($value) ? $this->uploadedAt = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
