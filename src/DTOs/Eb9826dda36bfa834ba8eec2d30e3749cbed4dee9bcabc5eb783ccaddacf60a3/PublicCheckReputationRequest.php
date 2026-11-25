<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\Eb9826dda36bfa834ba8eec2d30e3749cbed4dee9bcabc5eb783ccaddacf60a3;

/**
 * PublicCheckReputationRequest
 */
final class PublicCheckReputationRequest extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'phoneNumbers',
];

    protected const array VALIDATION = [
    'phoneNumbers' => [
        'minItems' => 1,
        'maxItems' => 100,
    ],
];

    /**
     * Phone numbers to query reputation for. Must be registered under the account.
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
            'phoneNumbers' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->phoneNumbers = new \InfobipSDK\Collections\StringCollection($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
