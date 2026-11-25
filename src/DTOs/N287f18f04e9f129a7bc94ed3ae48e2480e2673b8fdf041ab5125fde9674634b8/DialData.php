<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N287f18f04e9f129a7bc94ed3ae48e2480e2673b8fdf041ab5125fde9674634b8;

/**
 * DialData
 *
 * The data related to the dial instruction.
 */
final class DialData extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
    'errorCodeId' => [
        'format' => 'int32',
    ],
];

    /**
     * The unique identifier of the call that was dialed.
     * Example: "3fa85f64-5717-4562-b3fc-2c963f66afa6"
     */
    public string $callId;
    /**
     * The duration of the dialed call in milliseconds.
     * Example: 12500
     * Format: int64
     */
    public int $duration;
    /**
     * The status of the dialed call.
     * Example: 0
     * Format: int32
     */
    public int $errorCodeId {
        set {
            $this->assigning('errorCodeId', $value);
            $this->errorCodeId = $value;
        }
    }
    /**
     * The name of the error code associated with the dialed call.
     * Example: "NORMAL_HANGUP"
     */
    public string $errorCodeName;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'callId' => is_string($value) ? $this->callId = $value : parent::assignMember($name, $value),
            'duration' => is_int($value) ? $this->duration = $value : parent::assignMember($name, $value),
            'errorCodeId' => is_int($value) ? $this->errorCodeId = $value : parent::assignMember($name, $value),
            'errorCodeName' => is_string($value) ? $this->errorCodeName = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
