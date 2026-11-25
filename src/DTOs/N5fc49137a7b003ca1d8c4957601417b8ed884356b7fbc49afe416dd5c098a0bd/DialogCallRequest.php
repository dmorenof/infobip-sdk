<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N5fc49137a7b003ca1d8c4957601417b8ed884356b7fbc49afe416dd5c098a0bd;

/**
 * DialogCallRequest
 */
final class DialogCallRequest extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'connectTimeout' => [
            'maximum' => 60,
            'format' => 'int32',
        ],
    ];

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
     * Custom data is used for storing call-specific data defined by the client.
     */
    public \InfobipSDK\DTOs\N5fc49137a7b003ca1d8c4957601417b8ed884356b7fbc49afe416dd5c098a0bd\DialogCallRequest\CustomDataMap $customData;
    public \InfobipSDK\DTOs\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\CallEndpoint $endpoint;
    /**
     * Caller identifier. Must be a number in the [E.164](https://en.wikipedia.org/wiki/E.164) format for calls to `PHONE`, a string for calls to `WEBRTC` or `SIP`, and a Viber Voice number for calls to `VIBER`. Field is mandatory for `VIBER` endpoint and calls to emergency numbers.
     */
    public string $from;
    /**
     * Display name to show when placing calls towards WEBRTC endpoints. Can be any alphanumeric string.
     */
    public string $fromDisplayName;
    public \InfobipSDK\DTOs\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\MachineDetectionRequest $machineDetection;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'connectTimeout' => is_int($value) ? $this->connectTimeout = $value : parent::assignMember($name, $value),
            'endpoint' => $value instanceof \stdClass ? $this->endpoint = new \InfobipSDK\DTOs\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\CallEndpoint($value) : parent::assignMember($name, $value),
            'from' => is_string($value) ? $this->from = $value : parent::assignMember($name, $value),
            'fromDisplayName' => is_string($value) ? $this->fromDisplayName = $value : parent::assignMember($name, $value),
            'machineDetection' => $value instanceof \stdClass ? $this->machineDetection = new \InfobipSDK\DTOs\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\MachineDetectionRequest($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
