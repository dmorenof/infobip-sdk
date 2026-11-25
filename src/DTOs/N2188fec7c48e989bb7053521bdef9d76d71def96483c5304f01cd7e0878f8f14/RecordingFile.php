<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N2188fec7c48e989bb7053521bdef9d76d71def96483c5304f01cd7e0878f8f14;

/**
 * RecordingFile
 *
 * Recording files.
 */
final class RecordingFile extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Date and time in the UTC timezone when the recording file was created. Has the following format: `yyyy-MM-dd'T'HH:mm:ss.SSS+ZZZZ`.
     * Format: date-time
     */
    public string $creationTime;
    /**
     * Client-defined data.
     */
    public \InfobipSDK\DTOs\N2188fec7c48e989bb7053521bdef9d76d71def96483c5304f01cd7e0878f8f14\RecordingFile\CustomDataMap $customData;
    /**
     * File duration in seconds.
     * Format: int64
     */
    public int $duration;
    /**
     * Date and time in the UTC timezone when the recording ended. Has the following format: `yyyy-MM-dd'T'HH:mm:ss.SSS+ZZZZ`.
     * Format: date-time
     */
    public string $endTime;
    /**
     * File format.
     */
    public \InfobipSDK\Enums\N2188fec7c48e989bb7053521bdef9d76d71def96483c5304f01cd7e0878f8f14\RecordingFile\FileFormatEnum $fileFormat;
    /**
     * File identifier.
     */
    public string $id;
    /**
     * Location of recording file after processing.
     */
    public \InfobipSDK\Enums\N2188fec7c48e989bb7053521bdef9d76d71def96483c5304f01cd7e0878f8f14\RecordingFile\LocationEnum $location;
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
     * Date and time in the UTC timezone when the recording started. Has the following format: `yyyy-MM-dd'T'HH:mm:ss.SSS+ZZZZ`.
     * Format: date-time
     */
    public string $startTime;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'creationTime' => is_string($value) ? $this->creationTime = $value : parent::assignMember($name, $value),
            'duration' => is_int($value) ? $this->duration = $value : parent::assignMember($name, $value),
            'endTime' => is_string($value) ? $this->endTime = $value : parent::assignMember($name, $value),
            'fileFormat' => is_string($value) ? $this->fileFormat = \InfobipSDK\Enums\N2188fec7c48e989bb7053521bdef9d76d71def96483c5304f01cd7e0878f8f14\RecordingFile\FileFormatEnum::from($value) : parent::assignMember($name, $value),
            'id' => is_string($value) ? $this->id = $value : parent::assignMember($name, $value),
            'location' => is_string($value) ? $this->location = \InfobipSDK\Enums\N2188fec7c48e989bb7053521bdef9d76d71def96483c5304f01cd7e0878f8f14\RecordingFile\LocationEnum::from($value) : parent::assignMember($name, $value),
            'name' => is_string($value) ? $this->name = $value : parent::assignMember($name, $value),
            'size' => is_int($value) ? $this->size = $value : parent::assignMember($name, $value),
            'startTime' => is_string($value) ? $this->startTime = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
