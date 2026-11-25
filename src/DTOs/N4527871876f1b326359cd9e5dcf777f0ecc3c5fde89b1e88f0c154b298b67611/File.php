<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611;

/**
 * File
 */
final class File extends \Dmorenof\SdkRuntime\DTO
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
     * File duration in seconds.
     * Example: 3
     * Format: int64
     */
    public int $duration;
    /**
     * File expiration time.
     * Format: date-time
     */
    public string $expirationTime;
    public \InfobipSDK\Enums\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\FileFormat $fileFormat;
    /**
     * File ID.
     * Example: "218eceba-c044-430d-9f26-8f1a7f0g2d03"
     */
    public string $id;
    /**
     * File name.
     * Example: "Example file"
     */
    public string $name;
    /**
     * File size in bytes.
     * Example: 292190
     * Format: int64
     */
    public int $size;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'creationTime' => is_string($value) ? $this->creationTime = $value : parent::assignMember($name, $value),
            'duration' => is_int($value) ? $this->duration = $value : parent::assignMember($name, $value),
            'expirationTime' => is_string($value) ? $this->expirationTime = $value : parent::assignMember($name, $value),
            'fileFormat' => is_string($value) ? $this->fileFormat = \InfobipSDK\Enums\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\FileFormat::from($value) : parent::assignMember($name, $value),
            'id' => is_string($value) ? $this->id = $value : parent::assignMember($name, $value),
            'name' => is_string($value) ? $this->name = $value : parent::assignMember($name, $value),
            'size' => is_int($value) ? $this->size = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
