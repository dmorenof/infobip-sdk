<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N14b5f31f4f292db4a32c4e61928f9a47f8ff4c0a1c06a38af2c29ef9ca05095d;

/**
 * DialogAcceptTransferRequest
 */
final class DialogAcceptTransferRequest extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'targetCallRequest',
    ];

    protected const array VALIDATION = [
        'maxDuration' => [
            'format' => 'int32',
        ],
    ];

    /**
     * Whether to finalize the transfer if establishing the target call fails. When `false`, the dialog remains in the `TRANSFERRING` state and the transfer can be retried.
     */
    public bool $finalizeTransferOnFailure;
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
    public \InfobipSDK\DTOs\N5fc49137a7b003ca1d8c4957601417b8ed884356b7fbc49afe416dd5c098a0bd\DialogPropagationOptions $propagationOptions;
    public \InfobipSDK\DTOs\N14b5f31f4f292db4a32c4e61928f9a47f8ff4c0a1c06a38af2c29ef9ca05095d\DialogRecordingRequest $recording;
    public \InfobipSDK\DTOs\N5fc49137a7b003ca1d8c4957601417b8ed884356b7fbc49afe416dd5c098a0bd\DialogCallRequest $targetCallRequest;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'finalizeTransferOnFailure' => is_bool($value) ? $this->finalizeTransferOnFailure = $value : parent::assignMember($name, $value),
            'maxDuration' => is_int($value) ? $this->maxDuration = $value : parent::assignMember($name, $value),
            'propagationOptions' => $value instanceof \stdClass ? $this->propagationOptions = new \InfobipSDK\DTOs\N5fc49137a7b003ca1d8c4957601417b8ed884356b7fbc49afe416dd5c098a0bd\DialogPropagationOptions($value) : parent::assignMember($name, $value),
            'recording' => $value instanceof \stdClass ? $this->recording = new \InfobipSDK\DTOs\N14b5f31f4f292db4a32c4e61928f9a47f8ff4c0a1c06a38af2c29ef9ca05095d\DialogRecordingRequest($value) : parent::assignMember($name, $value),
            'targetCallRequest' => $value instanceof \stdClass ? $this->targetCallRequest = new \InfobipSDK\DTOs\N5fc49137a7b003ca1d8c4957601417b8ed884356b7fbc49afe416dd5c098a0bd\DialogCallRequest($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
