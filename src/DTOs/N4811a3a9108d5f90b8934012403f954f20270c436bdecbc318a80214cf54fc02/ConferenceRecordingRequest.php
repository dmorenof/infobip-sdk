<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N4811a3a9108d5f90b8934012403f954f20270c436bdecbc318a80214cf54fc02;

/**
 * ConferenceRecordingRequest
 */
final class ConferenceRecordingRequest extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'recordingType',
    ];

    public \InfobipSDK\DTOs\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\ConferenceComposition $conferenceComposition;
    /**
     * Custom data.
     */
    public \InfobipSDK\DTOs\N4811a3a9108d5f90b8934012403f954f20270c436bdecbc318a80214cf54fc02\ConferenceRecordingRequest\CustomDataMap $customData;
    /**
     * Custom name for the recording's zip file. Applicable only when SFTP server is enabled on [Voice settings page](https://portal.infobip.com/apps/voice/recording/settings).
     * Using the same `filePrefix` will override the files on the SFTP server.
     * For recording without composition, `callId` and `fileId` will be appended to the `filePrefix` value.
     */
    public string $filePrefix;
    public \InfobipSDK\Enums\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\RecordingType $recordingType;
    public \InfobipSDK\Enums\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\VideoRecordingQuality $videoRecordingQuality;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'conferenceComposition' => $value instanceof \stdClass ? $this->conferenceComposition = new \InfobipSDK\DTOs\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\ConferenceComposition($value) : parent::assignMember($name, $value),
            'filePrefix' => is_string($value) ? $this->filePrefix = $value : parent::assignMember($name, $value),
            'recordingType' => is_string($value) ? $this->recordingType = \InfobipSDK\Enums\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\RecordingType::from($value) : parent::assignMember($name, $value),
            'videoRecordingQuality' => is_string($value) ? $this->videoRecordingQuality = \InfobipSDK\Enums\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\VideoRecordingQuality::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
