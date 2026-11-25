<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N287f18f04e9f129a7bc94ed3ae48e2480e2673b8fdf041ab5125fde9674634b8;

/**
 * Recording
 *
 * If set, captures the call session from an established call to a given destination.
 */
final class Recording extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'recordingType',
    ];

    protected const array VALIDATION = [
        'filePrefix' => [
            'minLength' => 1,
            'maxLength' => 100,
            'pattern' => '^[a-zA-Z0-9_\\-]*$',
        ],
    ];

    /**
     * Client-defined data visible when a recording is downloaded.
     */
    public \InfobipSDK\DTOs\N287f18f04e9f129a7bc94ed3ae48e2480e2673b8fdf041ab5125fde9674634b8\Recording\CustomDataMap $customData;
    /**
     * Custom name for the recording's zip file. Applicable only when SFTP server is enabled on [Voice settings page](https://portal.infobip.com/apps/voice/recording/settings). For recordings without composition, `callId` and `fileId` will be appended to the `filePrefix` value. For recordings with composition, `fileId` will be appended to the `filePrefix` value.
     */
    public string $filePrefix {
        set {
            $this->assigning('filePrefix', $value);
            $this->filePrefix = $value;
        }
    }
    public \InfobipSDK\DTOs\N287f18f04e9f129a7bc94ed3ae48e2480e2673b8fdf041ab5125fde9674634b8\RecordingComposition $recordingComposition;
    public \InfobipSDK\Enums\N287f18f04e9f129a7bc94ed3ae48e2480e2673b8fdf041ab5125fde9674634b8\RecordingType $recordingType;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'filePrefix' => is_string($value) ? $this->filePrefix = $value : parent::assignMember($name, $value),
            'recordingComposition' => $value instanceof \stdClass ? $this->recordingComposition = new \InfobipSDK\DTOs\N287f18f04e9f129a7bc94ed3ae48e2480e2673b8fdf041ab5125fde9674634b8\RecordingComposition($value) : parent::assignMember($name, $value),
            'recordingType' => is_string($value) ? $this->recordingType = \InfobipSDK\Enums\N287f18f04e9f129a7bc94ed3ae48e2480e2673b8fdf041ab5125fde9674634b8\RecordingType::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
