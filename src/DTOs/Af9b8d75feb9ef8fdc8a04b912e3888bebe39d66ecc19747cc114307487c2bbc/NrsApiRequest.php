<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\Af9b8d75feb9ef8fdc8a04b912e3888bebe39d66ecc19747cc114307487c2bbc;

/**
 * NrsApiRequest
 *
 * Number Risk Score API request object
 */
final class NrsApiRequest extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'consentGranted',
        'phoneNumber',
    ];

    protected const array VALIDATION = [
        'phoneNumber' => [
            'minLength' => 5,
            'maxLength' => 15,
            'pattern' => '^\\+?\\d{5,15}$',
        ],
    ];

    /**
     * Indicates whether the user of the mobile phone number has granted consent to perform a request. Must be true.
     * Example: true
     */
    public bool $consentGranted;
    /**
     * Phone number in international format (e.g., +1234567890).
     * Must be between 5 and 15 digits, allowing an optional leading plus sign (+).
     * Example: "+1234567890"
     */
    public string $phoneNumber {
        set {
            $this->assigning('phoneNumber', $value);
            $this->phoneNumber = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'consentGranted' => is_bool($value) ? $this->consentGranted = $value : parent::assignMember($name, $value),
            'phoneNumber' => is_string($value) ? $this->phoneNumber = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
