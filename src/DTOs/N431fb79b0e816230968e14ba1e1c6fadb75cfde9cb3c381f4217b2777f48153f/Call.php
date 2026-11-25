<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N431fb79b0e816230968e14ba1e1c6fadb75cfde9cb3c381f4217b2777f48153f;

/**
 * Call
 */
final class Call extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'endpoint',
    ];

    protected const array VALIDATION = [
        'conferenceId' => [
            'maxLength' => 128,
        ],
        'dialogId' => [
            'maxLength' => 128,
        ],
        'id' => [
            'maxLength' => 128,
        ],
        'parentCallId' => [
            'maxLength' => 128,
        ],
        'ringDuration' => [
            'format' => 'int32',
        ],
    ];

    /**
     * Date and time for when the call has been answered.
     * Format: date-time
     */
    public string $answerTime;
    /**
     * Current calls configuration ID.
     * Example: "dc5942707c704551a00cd2ea"
     */
    public string $callsConfigurationId;
    /**
     * Current conference ID.
     * Example: "034e622a-cc7e-456d-8a10-0ba43b11aa5e"
     */
    public string $conferenceId {
        set {
            $this->assigning('conferenceId', $value);
            $this->conferenceId = $value;
        }
    }
    /**
     * Custom data.
     * Example: {"key1":"value1","key2":"value2"}
     */
    public \InfobipSDK\DTOs\N431fb79b0e816230968e14ba1e1c6fadb75cfde9cb3c381f4217b2777f48153f\Call\CustomDataMap $customData;
    /**
     * Dialog ID.
     * Example: "5aee53f4-72f8-484b-bfcc-10c5f5476f70"
     */
    public string $dialogId {
        set {
            $this->assigning('dialogId', $value);
            $this->dialogId = $value;
        }
    }
    public \InfobipSDK\Enums\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\CallDirection $direction;
    /**
     * Date and time for when the call has been finished.
     * Format: date-time
     */
    public string $endTime;
    public \InfobipSDK\DTOs\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\CallEndpoint $endpoint;
    /**
     * Client defined call ID.
     */
    public string $externalId;
    /**
     * Caller ID.
     * Example: "44790123456"
     */
    public string $from;
    /**
     * Unique call ID.
     * Example: "d8d84155-3831-43fb-91c9-bb897149a79d"
     */
    public string $id {
        set {
            $this->assigning('id', $value);
            $this->id = $value;
        }
    }
    public \InfobipSDK\DTOs\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\MachineDetectionProperties $machineDetection;
    public \InfobipSDK\DTOs\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\MediaProperties $media;
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
     * Format: int32
     */
    public int $ringDuration {
        set {
            $this->assigning('ringDuration', $value);
            $this->ringDuration = $value;
        }
    }
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
            'callsConfigurationId' => is_string($value) ? $this->callsConfigurationId = $value : parent::assignMember($name, $value),
            'conferenceId' => is_string($value) ? $this->conferenceId = $value : parent::assignMember($name, $value),
            'dialogId' => is_string($value) ? $this->dialogId = $value : parent::assignMember($name, $value),
            'direction' => is_string($value) ? $this->direction = \InfobipSDK\Enums\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\CallDirection::from($value) : parent::assignMember($name, $value),
            'endTime' => is_string($value) ? $this->endTime = $value : parent::assignMember($name, $value),
            'endpoint' => $value instanceof \stdClass ? $this->endpoint = new \InfobipSDK\DTOs\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\CallEndpoint($value) : parent::assignMember($name, $value),
            'externalId' => is_string($value) ? $this->externalId = $value : parent::assignMember($name, $value),
            'from' => is_string($value) ? $this->from = $value : parent::assignMember($name, $value),
            'id' => is_string($value) ? $this->id = $value : parent::assignMember($name, $value),
            'machineDetection' => $value instanceof \stdClass ? $this->machineDetection = new \InfobipSDK\DTOs\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\MachineDetectionProperties($value) : parent::assignMember($name, $value),
            'media' => $value instanceof \stdClass ? $this->media = new \InfobipSDK\DTOs\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\MediaProperties($value) : parent::assignMember($name, $value),
            'parentCallId' => is_string($value) ? $this->parentCallId = $value : parent::assignMember($name, $value),
            'platform' => $value instanceof \stdClass ? $this->platform = new \InfobipSDK\DTOs\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\Platform($value) : parent::assignMember($name, $value),
            'ringDuration' => is_int($value) ? $this->ringDuration = $value : parent::assignMember($name, $value),
            'startTime' => is_string($value) ? $this->startTime = $value : parent::assignMember($name, $value),
            'state' => is_string($value) ? $this->state = \InfobipSDK\Enums\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\CallState::from($value) : parent::assignMember($name, $value),
            'to' => is_string($value) ? $this->to = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
