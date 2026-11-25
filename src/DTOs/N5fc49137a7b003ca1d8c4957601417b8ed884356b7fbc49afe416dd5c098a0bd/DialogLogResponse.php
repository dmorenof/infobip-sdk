<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N5fc49137a7b003ca1d8c4957601417b8ed884356b7fbc49afe416dd5c098a0bd;

/**
 * DialogLogResponse
 */
final class DialogLogResponse extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'childCallId' => [
            'maxLength' => 128,
        ],
        'dialogId' => [
            'maxLength' => 128,
        ],
        'parentCallId' => [
            'maxLength' => 128,
        ],
    ];

    /**
     * Calls Configuration ID.
     * Example: "dc5942707c704551a00cd2ea"
     */
    public string $callsConfigurationId;
    /**
     * Unique child call ID.
     * Example: "ae024ad1-52e7-45d5-a5d2-cd7c809e03f8"
     */
    public string $childCallId {
        set {
            $this->assigning('childCallId', $value);
            $this->childCallId = $value;
        }
    }
    /**
     * Unique dialog ID.
     * Example: "034e622a-cc7e-456d-8a10-0ba43b11aa5e"
     */
    public string $dialogId {
        set {
            $this->assigning('dialogId', $value);
            $this->dialogId = $value;
        }
    }
    /**
     * Dialog duration in seconds.
     * Example: 5
     * Format: int64
     */
    public int $duration;
    /**
     * Date and time for when the dialog has been finished.
     * Format: date-time
     */
    public string $endTime;
    public \InfobipSDK\DTOs\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\ErrorCodeInfo $errorCode;
    /**
     * Date and time for when the dialog has been established.
     * Format: date-time
     */
    public string $establishTime;
    public \InfobipSDK\Enums\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\DialogHangupSource $hangupSource;
    /**
     * Unique parent call ID.
     * Example: "d8d84155-3831-43fb-91c9-10b5a8d628a0"
     */
    public string $parentCallId {
        set {
            $this->assigning('parentCallId', $value);
            $this->parentCallId = $value;
        }
    }
    public \InfobipSDK\DTOs\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\Platform $platform;
    public \InfobipSDK\DTOs\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\DialogRecordingLog $recording;
    /**
     * Date and time for when the dialog has been created.
     * Format: date-time
     */
    public string $startTime;
    public \InfobipSDK\Enums\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\PublicDialogState $state;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'callsConfigurationId' => is_string($value) ? $this->callsConfigurationId = $value : parent::assignMember($name, $value),
            'childCallId' => is_string($value) ? $this->childCallId = $value : parent::assignMember($name, $value),
            'dialogId' => is_string($value) ? $this->dialogId = $value : parent::assignMember($name, $value),
            'duration' => is_int($value) ? $this->duration = $value : parent::assignMember($name, $value),
            'endTime' => is_string($value) ? $this->endTime = $value : parent::assignMember($name, $value),
            'errorCode' => $value instanceof \stdClass ? $this->errorCode = new \InfobipSDK\DTOs\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\ErrorCodeInfo($value) : parent::assignMember($name, $value),
            'establishTime' => is_string($value) ? $this->establishTime = $value : parent::assignMember($name, $value),
            'hangupSource' => is_string($value) ? $this->hangupSource = \InfobipSDK\Enums\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\DialogHangupSource::from($value) : parent::assignMember($name, $value),
            'parentCallId' => is_string($value) ? $this->parentCallId = $value : parent::assignMember($name, $value),
            'platform' => $value instanceof \stdClass ? $this->platform = new \InfobipSDK\DTOs\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\Platform($value) : parent::assignMember($name, $value),
            'recording' => $value instanceof \stdClass ? $this->recording = new \InfobipSDK\DTOs\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\DialogRecordingLog($value) : parent::assignMember($name, $value),
            'startTime' => is_string($value) ? $this->startTime = $value : parent::assignMember($name, $value),
            'state' => is_string($value) ? $this->state = \InfobipSDK\Enums\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\PublicDialogState::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
