<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\B979cda441a7c661201042835d7dc18eaec3fa68a2905164912469051f8b8866;

/**
 * BackgroundFileMetadataApiModel
 *
 * Background file metadata in case of virtual background.
 */
final class BackgroundFileMetadataApiModel extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'fileId',
        'fileName',
        'fileUrl',
    ];

    /**
     * Id of specified background image file.
     */
    public string $fileId;
    /**
     * Name of specified background image file.
     */
    public string $fileName;
    /**
     * Size in bytes of specified background image file.
     * Format: int64
     */
    public int $fileSize;
    /**
     * File url of specified background image file.
     */
    public string $fileUrl;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'fileId' => is_string($value) ? $this->fileId = $value : parent::assignMember($name, $value),
            'fileName' => is_string($value) ? $this->fileName = $value : parent::assignMember($name, $value),
            'fileSize' => is_int($value) ? $this->fileSize = $value : parent::assignMember($name, $value),
            'fileUrl' => is_string($value) ? $this->fileUrl = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
