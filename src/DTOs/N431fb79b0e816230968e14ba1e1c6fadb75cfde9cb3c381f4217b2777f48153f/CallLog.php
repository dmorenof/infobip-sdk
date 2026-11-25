<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N431fb79b0e816230968e14ba1e1c6fadb75cfde9cb3c381f4217b2777f48153f;

/**
 * CallLog
 */
final class CallLog extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'endpoint',
];

    protected const array VALIDATION = [
    'callId' => [
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
     * Date and time for when the call has been answered.
     * Format: date-time
     */
    public string $answerTime;
    /**
     * Unique call ID.
     * Example: "d8d84155-3831-43fb-91c9-bb897149a79d"
     */
    public string $callId {
        set {
            $this->assigning('callId', $value);
            $this->callId = $value;
        }
    }
    /**
     * IDs of the calls configurations used during the call.
     * Example: ["a1b06592152e08646b08c057"]
     */
    public \InfobipSDK\Collections\StringCollection $callsConfigurationIds;
    /**
     * IDs of the conferences where the call was a participant.
     * Example: ["066675c6-0db6-0db9-b032-031964d09af4"]
     */
    public \InfobipSDK\Collections\StringCollection $conferenceIds;
    /**
     * Custom data.
     * Example: {"key1":"value1","key2":"value2"}
     */
    public \InfobipSDK\DTOs\N431fb79b0e816230968e14ba1e1c6fadb75cfde9cb3c381f4217b2777f48153f\CallLog\CustomDataMap $customData;
    /**
     * Dialog ID.
     */
    public string $dialogId {
        set {
            $this->assigning('dialogId', $value);
            $this->dialogId = $value;
        }
    }
    public \InfobipSDK\Enums\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\CallDirection $direction;
    /**
     * Call duration in seconds.
     * Example: 5
     * Format: int64
     */
    public int $duration;
    /**
     * Date and time for when the call has been finished.
     * Format: date-time
     */
    public string $endTime;
    public \InfobipSDK\DTOs\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\CallEndpoint $endpoint;
    public \InfobipSDK\DTOs\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\ErrorCodeInfo $errorCode;
    /**
     * Client defined call ID.
     */
    public string $externalId;
    /**
     * Caller ID.
     * Example: "44790123456"
     */
    public string $from;
    public \InfobipSDK\Enums\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\HangupSource $hangupSource;
    /**
     * Indicates if camera was enabled during the call.
     * Example: false
     */
    public bool $hasCameraVideo;
    /**
     * Indicates if screen sharing was enabled during the call.
     * Example: false
     */
    public bool $hasScreenshareVideo;
    public \InfobipSDK\DTOs\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\MachineDetectionProperties $machineDetection;
    /**
     * Parent call ID.
     * Example: "3ad8805e-d401-424e-9b03-e02a2016a5e2"
     */
    public string $parentCallId {
        set {
            $this->assigning('parentCallId', $value);
            $this->parentCallId = $value;
        }
    }
    public \InfobipSDK\DTOs\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\Platform $platform;
    /**
     * Ringing duration in seconds.
     * Example: 3
     * Format: int64
     */
    public int $ringDuration;
    /**
     * Sender.
     */
    public string $sender;
    /**
     * Date and time for when the call has been created.
     * Format: date-time
     */
    public string $startTime;
    public \InfobipSDK\Enums\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\CallState $state;
    /**
     * Callee ID.
     * Example: "44790987654"
     */
    public string $to;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'answerTime' => is_string($value) ? $this->answerTime = $value : parent::assignMember($name, $value),
            'callId' => is_string($value) ? $this->callId = $value : parent::assignMember($name, $value),
            'callsConfigurationIds' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->callsConfigurationIds = new \InfobipSDK\Collections\StringCollection($value) : parent::assignMember($name, $value),
            'conferenceIds' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->conferenceIds = new \InfobipSDK\Collections\StringCollection($value) : parent::assignMember($name, $value),
            'dialogId' => is_string($value) ? $this->dialogId = $value : parent::assignMember($name, $value),
            'direction' => is_string($value) ? $this->direction = \InfobipSDK\Enums\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\CallDirection::from($value) : parent::assignMember($name, $value),
            'duration' => is_int($value) ? $this->duration = $value : parent::assignMember($name, $value),
            'endTime' => is_string($value) ? $this->endTime = $value : parent::assignMember($name, $value),
            'endpoint' => $value instanceof \stdClass ? $this->endpoint = new \InfobipSDK\DTOs\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\CallEndpoint($value) : parent::assignMember($name, $value),
            'errorCode' => $value instanceof \stdClass ? $this->errorCode = new \InfobipSDK\DTOs\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\ErrorCodeInfo($value) : parent::assignMember($name, $value),
            'externalId' => is_string($value) ? $this->externalId = $value : parent::assignMember($name, $value),
            'from' => is_string($value) ? $this->from = $value : parent::assignMember($name, $value),
            'hangupSource' => is_string($value) ? $this->hangupSource = \InfobipSDK\Enums\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\HangupSource::from($value) : parent::assignMember($name, $value),
            'hasCameraVideo' => is_bool($value) ? $this->hasCameraVideo = $value : parent::assignMember($name, $value),
            'hasScreenshareVideo' => is_bool($value) ? $this->hasScreenshareVideo = $value : parent::assignMember($name, $value),
            'machineDetection' => $value instanceof \stdClass ? $this->machineDetection = new \InfobipSDK\DTOs\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\MachineDetectionProperties($value) : parent::assignMember($name, $value),
            'parentCallId' => is_string($value) ? $this->parentCallId = $value : parent::assignMember($name, $value),
            'platform' => $value instanceof \stdClass ? $this->platform = new \InfobipSDK\DTOs\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\Platform($value) : parent::assignMember($name, $value),
            'ringDuration' => is_int($value) ? $this->ringDuration = $value : parent::assignMember($name, $value),
            'sender' => is_string($value) ? $this->sender = $value : parent::assignMember($name, $value),
            'startTime' => is_string($value) ? $this->startTime = $value : parent::assignMember($name, $value),
            'state' => is_string($value) ? $this->state = \InfobipSDK\Enums\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\CallState::from($value) : parent::assignMember($name, $value),
            'to' => is_string($value) ? $this->to = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
