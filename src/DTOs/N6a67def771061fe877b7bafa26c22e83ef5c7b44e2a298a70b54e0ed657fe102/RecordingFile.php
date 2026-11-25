<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N6a67def771061fe877b7bafa26c22e83ef5c7b44e2a298a70b54e0ed657fe102;

/**
 * RecordingFile
 *
 * Recorded file.
 */
final class RecordingFile extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * File creation time.
     * Format: date-time
     */
    public string $creationTime;
    /**
     * Client-defined data as key-value pairs, where both key and value are strings.
     */
    public \InfobipSDK\DTOs\N6a67def771061fe877b7bafa26c22e83ef5c7b44e2a298a70b54e0ed657fe102\RecordingFile\CustomDataMap $customData;
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
    public \InfobipSDK\Enums\N7916e19109f991cfe966f390ef0d36117967291fa90eff57d8c8cb768f38352e\FileFormat $fileFormat;
    /**
     * File ID.
     */
    public string $id;
    public \InfobipSDK\Enums\N7916e19109f991cfe966f390ef0d36117967291fa90eff57d8c8cb768f38352e\ProcessedLocation $location;
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
            'fileFormat' => is_string($value) ? $this->fileFormat = \InfobipSDK\Enums\N7916e19109f991cfe966f390ef0d36117967291fa90eff57d8c8cb768f38352e\FileFormat::from($value) : parent::assignMember($name, $value),
            'id' => is_string($value) ? $this->id = $value : parent::assignMember($name, $value),
            'location' => is_string($value) ? $this->location = \InfobipSDK\Enums\N7916e19109f991cfe966f390ef0d36117967291fa90eff57d8c8cb768f38352e\ProcessedLocation::from($value) : parent::assignMember($name, $value),
            'name' => is_string($value) ? $this->name = $value : parent::assignMember($name, $value),
            'size' => is_int($value) ? $this->size = $value : parent::assignMember($name, $value),
            'startTime' => is_string($value) ? $this->startTime = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
