<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N13d6cf838c63455fe28fcf6ab1b4447c03d816f87ce89525d3cd759ca08a7b1a;

/**
 * VoiceData
 *
 * Fields representing details specific for voice messages.
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
     * If machine detection is used, contains the result of the machine detection (`HUMAN` or `MACHINE`).
     */
    public string $answeredBy;
    /**
     * Call recording file identification, if the call was recorded. Currently, populated only if the call was IVR.
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
    public \InfobipSDK\Enums\N13d6cf838c63455fe28fcf6ab1b4447c03d816f87ce89525d3cd759ca08a7b1a\CallDirection $direction;
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
    public \InfobipSDK\DTOs\N13d6cf838c63455fe28fcf6ab1b4447c03d816f87ce89525d3cd759ca08a7b1a\IvrData $ivr;
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
            'direction' => is_string($value) ? $this->direction = \InfobipSDK\Enums\N13d6cf838c63455fe28fcf6ab1b4447c03d816f87ce89525d3cd759ca08a7b1a\CallDirection::from($value) : parent::assignMember($name, $value),
            'dtmfCodes' => is_string($value) ? $this->dtmfCodes = $value : parent::assignMember($name, $value),
            'duration' => is_int($value) ? $this->duration = $value : parent::assignMember($name, $value),
            'endTime' => is_string($value) ? $this->endTime = $value : parent::assignMember($name, $value),
            'feature' => is_string($value) ? $this->feature = $value : parent::assignMember($name, $value),
            'fileDuration' => is_float($value) ? $this->fileDuration = $value : parent::assignMember($name, $value),
            'ivr' => $value instanceof \stdClass ? $this->ivr = new \InfobipSDK\DTOs\N13d6cf838c63455fe28fcf6ab1b4447c03d816f87ce89525d3cd759ca08a7b1a\IvrData($value) : parent::assignMember($name, $value),
            'startTime' => is_string($value) ? $this->startTime = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
