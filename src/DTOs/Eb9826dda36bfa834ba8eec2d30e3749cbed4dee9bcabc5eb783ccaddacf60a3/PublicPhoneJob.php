<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\Eb9826dda36bfa834ba8eec2d30e3749cbed4dee9bcabc5eb783ccaddacf60a3;

/**
 * PublicPhoneJob
 */
final class PublicPhoneJob extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'jobName',
        'phoneNumbersNeedingAttention',
        'phoneNumbersPending',
        'phoneNumbersRegistered',
    ];

    protected const array VALIDATION = [
        'phoneNumbersNeedingAttention' => [
            'format' => 'int32',
        ],
        'phoneNumbersPending' => [
            'format' => 'int32',
        ],
        'phoneNumbersRegistered' => [
            'format' => 'int32',
        ],
    ];

    /**
     * Job/batch name.
     * Example: "batch-2026-07-15"
     */
    public string $jobName;
    /**
     * Number of phone numbers under this job name whose registration was unsuccessful.
     * Example: 3
     * Format: int32
     */
    public int $phoneNumbersNeedingAttention {
        set {
            $this->assigning('phoneNumbersNeedingAttention', $value);
            $this->phoneNumbersNeedingAttention = $value;
        }
    }
    /**
     * Number of phone numbers under this job name still pending registration.
     * Example: 5
     * Format: int32
     */
    public int $phoneNumbersPending {
        set {
            $this->assigning('phoneNumbersPending', $value);
            $this->phoneNumbersPending = $value;
        }
    }
    /**
     * Number of phone numbers under this job name that are registered.
     * Example: 142
     * Format: int32
     */
    public int $phoneNumbersRegistered {
        set {
            $this->assigning('phoneNumbersRegistered', $value);
            $this->phoneNumbersRegistered = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'jobName' => is_string($value) ? $this->jobName = $value : parent::assignMember($name, $value),
            'phoneNumbersNeedingAttention' => is_int($value) ? $this->phoneNumbersNeedingAttention = $value : parent::assignMember($name, $value),
            'phoneNumbersPending' => is_int($value) ? $this->phoneNumbersPending = $value : parent::assignMember($name, $value),
            'phoneNumbersRegistered' => is_int($value) ? $this->phoneNumbersRegistered = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
