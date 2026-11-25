<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N08fdb52de63aac13de3ed81c2cf06532bc7e9a861dae97f83fafd7a6d53a779e;

/**
 * DtmfCaptureRequest
 */
final class DtmfCaptureRequest extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'maxLength',
        'timeout',
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

    /**
     * Optional parameter to update a call's custom data.
     */
    public \InfobipSDK\DTOs\N08fdb52de63aac13de3ed81c2cf06532bc7e9a861dae97f83fafd7a6d53a779e\DtmfCaptureRequest\CustomDataMap $customData;
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
     * Maximum number of digits to capture.
     * Format: int32
     */
    public int $maxLength {
        set {
            $this->assigning('maxLength', $value);
            $this->maxLength = $value;
        }
    }
    public \InfobipSDK\DTOs\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\PublicPlayContent $playContent;
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
            'digitTimeout' => is_int($value) ? $this->digitTimeout = $value : parent::assignMember($name, $value),
            'maxLength' => is_int($value) ? $this->maxLength = $value : parent::assignMember($name, $value),
            'terminator' => is_string($value) ? $this->terminator = $value : parent::assignMember($name, $value),
            'timeout' => is_int($value) ? $this->timeout = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
