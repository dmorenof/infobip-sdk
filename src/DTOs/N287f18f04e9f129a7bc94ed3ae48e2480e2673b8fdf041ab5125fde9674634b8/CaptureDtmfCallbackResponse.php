<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N287f18f04e9f129a7bc94ed3ae48e2480e2673b8fdf041ab5125fde9674634b8;

/**
 * CaptureDtmfCallbackResponse
 */
final class CaptureDtmfCallbackResponse extends \InfobipSDK\DTOs\N287f18f04e9f129a7bc94ed3ae48e2480e2673b8fdf041ab5125fde9674634b8\CallbackResponse
{
    public const array REQUIRED_FIELDS = [
        'command',
    ];

    protected const array VALIDATION = [
        'digitTimeout' => [
            'format' => 'int32',
        ],
        'maxLength' => [
            'format' => 'int32',
        ],
        'timeout' => [
            'format' => 'int32',
        ],
    ];

    protected const string ADDITIONAL_PROPERTIES_TYPE = 'mixed';
    protected const bool ADDITIONAL_PROPERTIES_NULLABLE = false;

    /**
     * Whether to convert the collected number into international format or not.
     */
    public bool $addCountryCode;
    /**
     * Duration, in milliseconds, to wait for a DTMF digit in-between individual digit inputs. If not set, `digitTimeout` will use the same duration as `timeout`.
     * Format: int32
     */
    public int $digitTimeout {
        set {
            $this->assigning('digitTimeout', $value);
            $this->digitTimeout = $value;
        }
    }
    /**
     * ID of an audio file to play. Required if `fileUrl` is not provided.
     */
    public string $fileId;
    /**
     * URL of an audio file to play. Required if `fileId` is not provided.
     */
    public string $fileUrl;
    /**
     * Maximum number of digits to capture.
     * Format: int32
     */
    public int $maxLength {
        set {
            $this->assigning('maxLength', $value);
            $this->maxLength = $value;
        }
    }
    /**
     * Digit used to end input if less than `maxLength` digits have been pressed.
     */
    public string $terminator;
    /**
     * The duration, in milliseconds, to wait for the first DTMF digit response.
     * Format: int32
     */
    public int $timeout {
        set {
            $this->assigning('timeout', $value);
            $this->timeout = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'addCountryCode' => is_bool($value) ? $this->addCountryCode = $value : parent::assignMember($name, $value),
            'digitTimeout' => is_int($value) ? $this->digitTimeout = $value : parent::assignMember($name, $value),
            'fileId' => is_string($value) ? $this->fileId = $value : parent::assignMember($name, $value),
            'fileUrl' => is_string($value) ? $this->fileUrl = $value : parent::assignMember($name, $value),
            'maxLength' => is_int($value) ? $this->maxLength = $value : parent::assignMember($name, $value),
            'terminator' => is_string($value) ? $this->terminator = $value : parent::assignMember($name, $value),
            'timeout' => is_int($value) ? $this->timeout = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
