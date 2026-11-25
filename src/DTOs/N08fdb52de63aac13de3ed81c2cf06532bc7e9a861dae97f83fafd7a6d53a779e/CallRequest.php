<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N08fdb52de63aac13de3ed81c2cf06532bc7e9a861dae97f83fafd7a6d53a779e;

/**
 * CallRequest
 *
 * Outbound call request.
 */
final class CallRequest extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'callsConfigurationId',
    'endpoint',
];

    protected const array VALIDATION = [
    'connectTimeout' => [
        'maximum' => 60,
        'format' => 'int32',
    ],
    'maxDuration' => [
        'format' => 'int32',
    ],
    'parentCallId' => [
        'maxLength' => 128,
    ],
];

    /**
     * Calls Configuration ID.
     */
    public string $callsConfigurationId;
    /**
     * Time to wait, in seconds, before the called party answers the call.
     * Format: int32
     */
    public int $connectTimeout {
        set {
            $this->assigning('connectTimeout', $value);
            $this->connectTimeout = $value;
        }
    }
    /**
     * Custom data.
     */
    public \InfobipSDK\DTOs\N08fdb52de63aac13de3ed81c2cf06532bc7e9a861dae97f83fafd7a6d53a779e\CallRequest\CustomDataMap $customData;
    public \InfobipSDK\DTOs\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\CallEndpoint $endpoint;
    /**
     * Custom ID assigned by the client.
     */
    public string $externalId;
    /**
     * Caller identifier. Must be a number in the [E.164](https://en.wikipedia.org/wiki/E.164) format for calls to `PHONE`, a string for calls to `WEBRTC` or `SIP`, and a Viber Voice number for calls to `VIBER`. Field is mandatory for `VIBER` endpoint and calls to emergency numbers.
     */
    public string $from;
    /**
     * Display name to show when placing calls towards WEBRTC endpoints. Can be any alphanumeric string.
     */
    public string $fromDisplayName;
    public \InfobipSDK\DTOs\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\MachineDetectionRequest $machineDetection;
    /**
     * Max duration in seconds.
     * Format: int32
     */
    public int $maxDuration {
        set {
            $this->assigning('maxDuration', $value);
            $this->maxDuration = $value;
        }
    }
    /**
     * ID of an existing call that initiated this leg. Required for [creating a dialog with an existing call.](#create-dialog-with-existing-calls)
     */
    public string $parentCallId {
        set {
            $this->assigning('parentCallId', $value);
            $this->parentCallId = $value;
        }
    }
    public \InfobipSDK\DTOs\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\Platform $platform;
    public \InfobipSDK\DTOs\N6665694460cb56ab854a173ada36805c85c7ec55584901d2f06225baf9b586cb\CallRecordingRequest $recording;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'callsConfigurationId' => is_string($value) ? $this->callsConfigurationId = $value : parent::assignMember($name, $value),
            'connectTimeout' => is_int($value) ? $this->connectTimeout = $value : parent::assignMember($name, $value),
            'endpoint' => $value instanceof \stdClass ? $this->endpoint = new \InfobipSDK\DTOs\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\CallEndpoint($value) : parent::assignMember($name, $value),
            'externalId' => is_string($value) ? $this->externalId = $value : parent::assignMember($name, $value),
            'from' => is_string($value) ? $this->from = $value : parent::assignMember($name, $value),
            'fromDisplayName' => is_string($value) ? $this->fromDisplayName = $value : parent::assignMember($name, $value),
            'machineDetection' => $value instanceof \stdClass ? $this->machineDetection = new \InfobipSDK\DTOs\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\MachineDetectionRequest($value) : parent::assignMember($name, $value),
            'maxDuration' => is_int($value) ? $this->maxDuration = $value : parent::assignMember($name, $value),
            'parentCallId' => is_string($value) ? $this->parentCallId = $value : parent::assignMember($name, $value),
            'platform' => $value instanceof \stdClass ? $this->platform = new \InfobipSDK\DTOs\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\Platform($value) : parent::assignMember($name, $value),
            'recording' => $value instanceof \stdClass ? $this->recording = new \InfobipSDK\DTOs\N6665694460cb56ab854a173ada36805c85c7ec55584901d2f06225baf9b586cb\CallRecordingRequest($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
