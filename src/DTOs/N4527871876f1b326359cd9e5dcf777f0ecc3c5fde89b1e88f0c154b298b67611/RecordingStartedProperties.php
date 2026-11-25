<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611;

/**
 * RecordingStartedProperties
 *
 * Recording information available when recording is started.
 */
final class RecordingStartedProperties extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Recording file identifier when auto-compose feature is turned on.
     * Example: "218eceba-c044-430d-9f26-8f1a7f0g2d03"
     */
    public string $composedFileId;
    /**
     * Flag indicating whether auto-compose feature was turned on for the recording.
     */
    public bool $composition;
    /**
     * Custom data.
     */
    public \InfobipSDK\DTOs\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\RecordingStartedProperties\CustomDataMap $customData;
    /**
     * Custom name for the recording's zip file.
     */
    public string $filePrefix;
    public \InfobipSDK\Enums\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\RecordingType $recordingType;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'composedFileId' => is_string($value) ? $this->composedFileId = $value : parent::assignMember($name, $value),
            'composition' => is_bool($value) ? $this->composition = $value : parent::assignMember($name, $value),
            'filePrefix' => is_string($value) ? $this->filePrefix = $value : parent::assignMember($name, $value),
            'recordingType' => is_string($value) ? $this->recordingType = \InfobipSDK\Enums\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\RecordingType::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
