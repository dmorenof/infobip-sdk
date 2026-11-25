<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N14b5f31f4f292db4a32c4e61928f9a47f8ff4c0a1c06a38af2c29ef9ca05095d;

/**
 * DialogRecordingRequest
 */
final class DialogRecordingRequest extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'recordingType',
];

    /**
     * Custom data.
     */
    public \InfobipSDK\DTOs\N14b5f31f4f292db4a32c4e61928f9a47f8ff4c0a1c06a38af2c29ef9ca05095d\DialogRecordingRequest\CustomDataMap $customData;
    public \InfobipSDK\DTOs\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\DialogRecordingComposition $dialogComposition;
    /**
     * Custom name for the recording's zip file. Applicable only when SFTP server is enabled on [Voice settings page](https://portal.infobip.com/apps/voice/recording/settings).
     * Using the same filePrefix will override the files on the SFTP server.
     * For recordings without composition, `callId` and `fileId` will be appended to the `filePrefix` value.
     */
    public string $filePrefix;
    public \InfobipSDK\Enums\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\RecordingType $recordingType;
    public \InfobipSDK\Enums\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\VideoRecordingQuality $videoRecordingQuality;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'dialogComposition' => $value instanceof \stdClass ? $this->dialogComposition = new \InfobipSDK\DTOs\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\DialogRecordingComposition($value) : parent::assignMember($name, $value),
            'filePrefix' => is_string($value) ? $this->filePrefix = $value : parent::assignMember($name, $value),
            'recordingType' => is_string($value) ? $this->recordingType = \InfobipSDK\Enums\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\RecordingType::from($value) : parent::assignMember($name, $value),
            'videoRecordingQuality' => is_string($value) ? $this->videoRecordingQuality = \InfobipSDK\Enums\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\VideoRecordingQuality::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
