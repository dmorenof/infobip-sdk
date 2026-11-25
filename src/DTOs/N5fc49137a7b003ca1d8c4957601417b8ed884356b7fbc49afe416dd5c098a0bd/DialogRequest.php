<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N5fc49137a7b003ca1d8c4957601417b8ed884356b7fbc49afe416dd5c098a0bd;

/**
 * DialogRequest
 */
final class DialogRequest extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'parentCallId',
];

    protected const array VALIDATION = [
    'maxDuration' => [
        'format' => 'int32',
    ],
    'parentCallId' => [
        'maxLength' => 128,
    ],
];

    public \InfobipSDK\DTOs\N5fc49137a7b003ca1d8c4957601417b8ed884356b7fbc49afe416dd5c098a0bd\DialogCallRequest $childCallRequest;
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
     * Unique parent call ID.
     */
    public string $parentCallId {
        set {
            $this->assigning('parentCallId', $value);
            $this->parentCallId = $value;
        }
    }
    public \InfobipSDK\DTOs\N5fc49137a7b003ca1d8c4957601417b8ed884356b7fbc49afe416dd5c098a0bd\DialogPropagationOptions $propagationOptions;
    public \InfobipSDK\DTOs\N14b5f31f4f292db4a32c4e61928f9a47f8ff4c0a1c06a38af2c29ef9ca05095d\DialogRecordingRequest $recording;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'childCallRequest' => $value instanceof \stdClass ? $this->childCallRequest = new \InfobipSDK\DTOs\N5fc49137a7b003ca1d8c4957601417b8ed884356b7fbc49afe416dd5c098a0bd\DialogCallRequest($value) : parent::assignMember($name, $value),
            'maxDuration' => is_int($value) ? $this->maxDuration = $value : parent::assignMember($name, $value),
            'parentCallId' => is_string($value) ? $this->parentCallId = $value : parent::assignMember($name, $value),
            'propagationOptions' => $value instanceof \stdClass ? $this->propagationOptions = new \InfobipSDK\DTOs\N5fc49137a7b003ca1d8c4957601417b8ed884356b7fbc49afe416dd5c098a0bd\DialogPropagationOptions($value) : parent::assignMember($name, $value),
            'recording' => $value instanceof \stdClass ? $this->recording = new \InfobipSDK\DTOs\N14b5f31f4f292db4a32c4e61928f9a47f8ff4c0a1c06a38af2c29ef9ca05095d\DialogRecordingRequest($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
