<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611;

/**
 * RecordingFailedProperties
 */
final class RecordingFailedProperties extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Recording failure reason.
     */
    public string $reason;
    /**
     * Recording custom data.
     * Example: {"key1":"value1","key2":"value2"}
     */
    public \InfobipSDK\DTOs\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\RecordingFailedProperties\CustomDataMap $recordingCustomData;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'reason' => is_string($value) ? $this->reason = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
