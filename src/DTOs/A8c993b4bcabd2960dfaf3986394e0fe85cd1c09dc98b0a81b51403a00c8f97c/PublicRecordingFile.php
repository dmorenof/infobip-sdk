<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\A8c993b4bcabd2960dfaf3986394e0fe85cd1c09dc98b0a81b51403a00c8f97c;

/**
 * PublicRecordingFile
 */
final class PublicRecordingFile extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'fileFormat',
        'name',
    ];

    /**
     * File creation time.
     * Format: date-time
     */
    public string $creationTime;
    /**
     * Custom data.
     */
    public \InfobipSDK\DTOs\A8c993b4bcabd2960dfaf3986394e0fe85cd1c09dc98b0a81b51403a00c8f97c\PublicRecordingFile\CustomDataMap $customData;
    /**
     * File duration in seconds.
     * Example: 3
     * Format: int64
     */
    public int $duration;
    /**
     * Date and time when the recording ended.
     * Format: date-time
     */
    public string $endTime;
    public \InfobipSDK\Enums\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\FileFormat $fileFormat;
    /**
     * File ID.
     * Example: "65f0b3d7c8b6a00001a2b3c4"
     */
    public string $id;
    public \InfobipSDK\Enums\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\RecordingFileLocation $location;
    /**
     * File name.
     * Example: "example-audio.wav"
     */
    public string $name;
    public \InfobipSDK\Enums\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\SftpUploadStatus $sftpUploadStatus;
    /**
     * File size in bytes.
     * Example: 292190
     * Format: int64
     */
    public int $size;
    /**
     * Date and time when the recording started.
     * Format: date-time
     */
    public string $startTime;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'creationTime' => is_string($value) ? $this->creationTime = $value : parent::assignMember($name, $value),
            'duration' => is_int($value) ? $this->duration = $value : parent::assignMember($name, $value),
            'endTime' => is_string($value) ? $this->endTime = $value : parent::assignMember($name, $value),
            'fileFormat' => is_string($value) ? $this->fileFormat = \InfobipSDK\Enums\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\FileFormat::from($value) : parent::assignMember($name, $value),
            'id' => is_string($value) ? $this->id = $value : parent::assignMember($name, $value),
            'location' => is_string($value) ? $this->location = \InfobipSDK\Enums\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\RecordingFileLocation::from($value) : parent::assignMember($name, $value),
            'name' => is_string($value) ? $this->name = $value : parent::assignMember($name, $value),
            'sftpUploadStatus' => is_string($value) ? $this->sftpUploadStatus = \InfobipSDK\Enums\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\SftpUploadStatus::from($value) : parent::assignMember($name, $value),
            'size' => is_int($value) ? $this->size = $value : parent::assignMember($name, $value),
            'startTime' => is_string($value) ? $this->startTime = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
