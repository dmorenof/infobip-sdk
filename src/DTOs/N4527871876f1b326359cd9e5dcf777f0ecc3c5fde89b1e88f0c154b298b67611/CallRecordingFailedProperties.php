<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611;

/**
 * CallRecordingFailedProperties
 */
final class CallRecordingFailedProperties extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Recording file identifier.
     * Example: "218eceba-c044-430d-9f26-8f1a7f0g2d03"
     */
    public string $fileId;
    /**
     * Recording failure reason.
     */
    public string $reason;
    /**
     * Recording custom data.
     * Example: {"key1":"value1","key2":"value2"}
     */
    public \InfobipSDK\DTOs\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\CallRecordingFailedProperties\CustomDataMap $recordingCustomData;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'fileId' => is_string($value) ? $this->fileId = $value : parent::assignMember($name, $value),
            'reason' => is_string($value) ? $this->reason = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
