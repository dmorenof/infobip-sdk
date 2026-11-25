<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611;

/**
 * CallRecordingStoppedProperties
 *
 * Description of the recording stopped event.
 */
final class CallRecordingStoppedProperties extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Date and time for when the call recording has stopped.
     * Format: date-time
     */
    public string $endTime;
    /**
     * Recording file identifier.
     * Example: "218eceba-c044-430d-9f26-8f1a7f0g2d03"
     */
    public string $fileId;
    /**
     * Date and time for when the call recording has started.
     * Format: date-time
     */
    public string $startTime;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'endTime' => is_string($value) ? $this->endTime = $value : parent::assignMember($name, $value),
            'fileId' => is_string($value) ? $this->fileId = $value : parent::assignMember($name, $value),
            'startTime' => is_string($value) ? $this->startTime = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
