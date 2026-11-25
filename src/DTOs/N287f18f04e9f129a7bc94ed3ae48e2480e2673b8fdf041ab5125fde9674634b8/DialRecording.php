<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N287f18f04e9f129a7bc94ed3ae48e2480e2673b8fdf041ab5125fde9674634b8;

/**
 * DialRecording
 *
 * Recording configuration for dial actions.
 */
final class DialRecording extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'recordingStatusCallbackEvents' => [
            'uniqueItems' => true,
        ],
    ];

    /**
     * Custom data to attach to recordings.
     */
    public \InfobipSDK\DTOs\N287f18f04e9f129a7bc94ed3ae48e2480e2673b8fdf041ab5125fde9674634b8\DialRecording\CustomDataMap $customData;
    /**
     * Prefix for recorded file names.
     */
    public string $filePrefix;
    public \InfobipSDK\DTOs\N287f18f04e9f129a7bc94ed3ae48e2480e2673b8fdf041ab5125fde9674634b8\RecordingComposition $recordingComposition;
    /**
     * Set of recording status events that trigger the recording status callback.
     */
    public \InfobipSDK\Collections\N287f18f04e9f129a7bc94ed3ae48e2480e2673b8fdf041ab5125fde9674634b8\DialRecording\CallbackEventsCollection $recordingStatusCallbackEvents {
        set {
            $this->assigning('recordingStatusCallbackEvents', $value);
            $this->recordingStatusCallbackEvents = $value;
        }
    }
    public \InfobipSDK\DTOs\N287f18f04e9f129a7bc94ed3ae48e2480e2673b8fdf041ab5125fde9674634b8\CallbackUrl $recordingStatusCallbackUrl;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'filePrefix' => is_string($value) ? $this->filePrefix = $value : parent::assignMember($name, $value),
            'recordingComposition' => $value instanceof \stdClass ? $this->recordingComposition = new \InfobipSDK\DTOs\N287f18f04e9f129a7bc94ed3ae48e2480e2673b8fdf041ab5125fde9674634b8\RecordingComposition($value) : parent::assignMember($name, $value),
            'recordingStatusCallbackUrl' => $value instanceof \stdClass ? $this->recordingStatusCallbackUrl = new \InfobipSDK\DTOs\N287f18f04e9f129a7bc94ed3ae48e2480e2673b8fdf041ab5125fde9674634b8\CallbackUrl($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
