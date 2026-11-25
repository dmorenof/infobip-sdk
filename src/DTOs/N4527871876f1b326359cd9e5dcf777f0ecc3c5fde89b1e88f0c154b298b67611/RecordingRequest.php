<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611;

/**
 * RecordingRequest
 */
final class RecordingRequest extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'recordingType',
    ];

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
    public \InfobipSDK\DTOs\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\RecordingRequest\CustomDataMap $customData;
    /**
     * Custom name for the recording's zip file. Applicable only when SFTP server is enabled on [Voice settings page](https://portal.infobip.com/apps/voice/recording/settings).
     * Using the same `filePrefix` will override the files on the SFTP server.
     */
    public string $filePrefix;
    /**
     * Maximum recording duration in seconds.  (If this field is set the recording can't be stopped by the [stop recording endpoint](#call-stop-recording).)
     * Format: int32
     */
    public int $maxDuration {
        set {
            $this->assigning('maxDuration', $value);
            $this->maxDuration = $value;
        }
    }
    /**
     * Silence duration, in seconds, before the recording stops. (If this field is set the recording can't be stopped by the [stop recording endpoint](#call-stop-recording).)
     * Format: int32
     */
    public int $maxSilence {
        set {
            $this->assigning('maxSilence', $value);
            $this->maxSilence = $value;
        }
    }
    public \InfobipSDK\Enums\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\RecordingType $recordingType;
    public \InfobipSDK\Enums\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\VideoRecordingQuality $videoRecordingQuality;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'beep' => is_bool($value) ? $this->beep = $value : parent::assignMember($name, $value),
            'filePrefix' => is_string($value) ? $this->filePrefix = $value : parent::assignMember($name, $value),
            'maxDuration' => is_int($value) ? $this->maxDuration = $value : parent::assignMember($name, $value),
            'maxSilence' => is_int($value) ? $this->maxSilence = $value : parent::assignMember($name, $value),
            'recordingType' => is_string($value) ? $this->recordingType = \InfobipSDK\Enums\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\RecordingType::from($value) : parent::assignMember($name, $value),
            'videoRecordingQuality' => is_string($value) ? $this->videoRecordingQuality = \InfobipSDK\Enums\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\VideoRecordingQuality::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
