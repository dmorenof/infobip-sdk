<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611;

/**
 * CallRecordingStartedProperties
 *
 * Call recording information available when recording is started.
 */
final class CallRecordingStartedProperties extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'maxDuration' => [
            'format' => 'int32',
        ],
        'maxSilence' => [
            'format' => 'int32',
        ],
    ];

    /**
     * Flag indicating if a beep sound should be played before recording.
     */
    public bool $beep;
    /**
     * Custom data.
     */
    public \InfobipSDK\DTOs\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\CallRecordingStartedProperties\CustomDataMap $customData;
    /**
     * Recording file identifier.
     * Example: "218eceba-c044-430d-9f26-8f1a7f0g2d03"
     */
    public string $fileId;
    /**
     * Custom name for the recording's zip file.
     */
    public string $filePrefix;
    /**
     * Maximum recording duration in seconds.
     * Format: int32
     */
    public int $maxDuration {
        set {
            $this->assigning('maxDuration', $value);
            $this->maxDuration = $value;
        }
    }
    /**
     * Silence duration, in seconds, before the recording stops.
     * Format: int32
     */
    public int $maxSilence {
        set {
            $this->assigning('maxSilence', $value);
            $this->maxSilence = $value;
        }
    }
    public \InfobipSDK\Enums\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\RecordingType $recordingType;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'beep' => is_bool($value) ? $this->beep = $value : parent::assignMember($name, $value),
            'fileId' => is_string($value) ? $this->fileId = $value : parent::assignMember($name, $value),
            'filePrefix' => is_string($value) ? $this->filePrefix = $value : parent::assignMember($name, $value),
            'maxDuration' => is_int($value) ? $this->maxDuration = $value : parent::assignMember($name, $value),
            'maxSilence' => is_int($value) ? $this->maxSilence = $value : parent::assignMember($name, $value),
            'recordingType' => is_string($value) ? $this->recordingType = \InfobipSDK\Enums\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\RecordingType::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
