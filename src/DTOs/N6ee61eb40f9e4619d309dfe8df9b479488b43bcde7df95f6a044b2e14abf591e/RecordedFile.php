<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N6ee61eb40f9e4619d309dfe8df9b479488b43bcde7df95f6a044b2e14abf591e;

/**
 * RecordedFile
 *
 * Recorded file.
 */
final class RecordedFile extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * File creation time.
     * Example: "2024-05-01T14:25:22.458Z"
     * Format: date-time
     */
    public string $creationTime;
    /**
     * Client-defined data.
     */
    public \InfobipSDK\DTOs\N6ee61eb40f9e4619d309dfe8df9b479488b43bcde7df95f6a044b2e14abf591e\RecordedFile\CustomDataMap $customData;
    /**
     * File duration in seconds.
     * Format: int64
     */
    public int $duration;
    /**
     * Date and time when the recording ended.
     * Example: "2024-05-01T14:30:22.458Z"
     * Format: date-time
     */
    public string $endTime;
    public \InfobipSDK\Enums\N6ee61eb40f9e4619d309dfe8df9b479488b43bcde7df95f6a044b2e14abf591e\FileFormat $fileFormat;
    /**
     * File ID.
     */
    public string $id;
    public \InfobipSDK\Enums\N6ee61eb40f9e4619d309dfe8df9b479488b43bcde7df95f6a044b2e14abf591e\RecordingFileLocation $location;
    /**
     * File name.
     */
    public string $name;
    /**
     * File size in bytes.
     * Format: int64
     */
    public int $size;
    /**
     * Date and time when the recording started.
     * Example: "2024-05-01T14:25:22.458Z"
     * Format: date-time
     */
    public string $startTime;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'creationTime' => is_string($value) ? $this->creationTime = $value : parent::assignMember($name, $value),
            'duration' => is_int($value) ? $this->duration = $value : parent::assignMember($name, $value),
            'endTime' => is_string($value) ? $this->endTime = $value : parent::assignMember($name, $value),
            'fileFormat' => is_string($value) ? $this->fileFormat = \InfobipSDK\Enums\N6ee61eb40f9e4619d309dfe8df9b479488b43bcde7df95f6a044b2e14abf591e\FileFormat::from($value) : parent::assignMember($name, $value),
            'id' => is_string($value) ? $this->id = $value : parent::assignMember($name, $value),
            'location' => is_string($value) ? $this->location = \InfobipSDK\Enums\N6ee61eb40f9e4619d309dfe8df9b479488b43bcde7df95f6a044b2e14abf591e\RecordingFileLocation::from($value) : parent::assignMember($name, $value),
            'name' => is_string($value) ? $this->name = $value : parent::assignMember($name, $value),
            'size' => is_int($value) ? $this->size = $value : parent::assignMember($name, $value),
            'startTime' => is_string($value) ? $this->startTime = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
