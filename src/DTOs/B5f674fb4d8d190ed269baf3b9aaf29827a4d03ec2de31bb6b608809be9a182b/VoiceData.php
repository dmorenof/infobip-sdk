<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\B5f674fb4d8d190ed269baf3b9aaf29827a4d03ec2de31bb6b608809be9a182b;

/**
 * VoiceData
 */
final class VoiceData extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'chargedDuration' => [
            'format' => 'int32',
        ],
        'duration' => [
            'format' => 'int32',
        ],
    ];

    /**
     * Date and time when the voice message was answered. Has the following format: yyyy-MM-dd'T'HH:mm:ss.SSSZ.
     */
    public string $answerTime;
    /**
     * If machine detection is used, contains the result of the machine detection (`HUMAN` or `MACHINE`). Currently, populated only if the call was IVR.
     */
    public string $answeredBy;
    /**
     * Call recording file identification, if the call was recorded. Currently, populated only if the call was IVR. The file can be downloaded using [calls api](https://www.infobip.com/docs/api/channels/voice/calls/files-and-recordings/download-recording-file).
     */
    public string $callRecordingFileId;
    /**
     * Charged duration of the voice message, in seconds.
     * Format: int32
     */
    public int $chargedDuration {
        set {
            $this->assigning('chargedDuration', $value);
            $this->chargedDuration = $value;
        }
    }
    /**
     * Call direction.
     */
    public string $direction;
    /**
     * DTMF code entered by user. Can be empty string, if user did not press anything, or `null` in case of IVR if user did not participate in Collect action.
     */
    public string $dtmfCodes;
    /**
     * Duration of the voice message, in seconds.
     * Format: int32
     */
    public int $duration {
        set {
            $this->assigning('duration', $value);
            $this->duration = $value;
        }
    }
    /**
     * Date and time when the voice message was ended. Has the following format: yyyy-MM-dd'T'HH:mm:ss.SSSZ.
     */
    public string $endTime;
    /**
     * Name of the Infobip Voice service or feature.
     */
    public string $feature;
    /**
     * Duration of the voice message audio file, in seconds.
     * Format: double
     */
    public float $fileDuration;
    /**
     * Fields representing details about IVR, if outbound IVR is being used. If the call was not IVR, the field will be null.
     */
    public \InfobipSDK\DTOs\B5f674fb4d8d190ed269baf3b9aaf29827a4d03ec2de31bb6b608809be9a182b\IvrData $ivr;
    /**
     * Date and time when the voice message was established and started ringing. Has the following format: yyyy-MM-dd'T'HH:mm:ss.SSSZ.
     */
    public string $startTime;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'answerTime' => is_string($value) ? $this->answerTime = $value : parent::assignMember($name, $value),
            'answeredBy' => is_string($value) ? $this->answeredBy = $value : parent::assignMember($name, $value),
            'callRecordingFileId' => is_string($value) ? $this->callRecordingFileId = $value : parent::assignMember($name, $value),
            'chargedDuration' => is_int($value) ? $this->chargedDuration = $value : parent::assignMember($name, $value),
            'direction' => is_string($value) ? $this->direction = $value : parent::assignMember($name, $value),
            'dtmfCodes' => is_string($value) ? $this->dtmfCodes = $value : parent::assignMember($name, $value),
            'duration' => is_int($value) ? $this->duration = $value : parent::assignMember($name, $value),
            'endTime' => is_string($value) ? $this->endTime = $value : parent::assignMember($name, $value),
            'feature' => is_string($value) ? $this->feature = $value : parent::assignMember($name, $value),
            'fileDuration' => is_float($value) ? $this->fileDuration = $value : parent::assignMember($name, $value),
            'ivr' => $value instanceof \stdClass ? $this->ivr = new \InfobipSDK\DTOs\B5f674fb4d8d190ed269baf3b9aaf29827a4d03ec2de31bb6b608809be9a182b\IvrData($value) : parent::assignMember($name, $value),
            'startTime' => is_string($value) ? $this->startTime = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
