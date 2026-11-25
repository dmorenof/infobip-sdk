<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\Eb9826dda36bfa834ba8eec2d30e3749cbed4dee9bcabc5eb783ccaddacf60a3;

/**
 * PublicRegisterPhoneNumbersRequest
 */
final class PublicRegisterPhoneNumbersRequest extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'jobName',
    'phoneNumbers',
];

    protected const array VALIDATION = [
    'phoneNumbers' => [
        'minItems' => 1,
        'maxItems' => 100,
    ],
];

    /**
     * Identifier for the registration job/batch.
     * Example: "batch-2026-07-15"
     */
    public string $jobName;
    /**
     * Phone numbers in international format. Between 1 and 100 per request.
     * Example: ["14155551234","14155551235"]
     */
    public \InfobipSDK\Collections\StringCollection $phoneNumbers {
        set {
            $this->assigning('phoneNumbers', $value);
            $this->phoneNumbers = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'jobName' => is_string($value) ? $this->jobName = $value : parent::assignMember($name, $value),
            'phoneNumbers' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->phoneNumbers = new \InfobipSDK\Collections\StringCollection($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
