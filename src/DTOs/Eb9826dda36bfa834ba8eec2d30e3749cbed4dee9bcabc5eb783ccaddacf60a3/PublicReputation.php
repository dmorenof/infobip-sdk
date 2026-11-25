<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\Eb9826dda36bfa834ba8eec2d30e3749cbed4dee9bcabc5eb783ccaddacf60a3;

/**
 * PublicReputation
 */
final class PublicReputation extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'phoneNumber',
    'reputationAvailable',
];

    /**
     * Business ID the number is registered under.
     * Example: "a1b2c3d4-e5f6-7890-abcd-ef1234567890"
     * Format: uuid
     */
    public string $businessId;
    public \InfobipSDK\DTOs\Eb9826dda36bfa834ba8eec2d30e3749cbed4dee9bcabc5eb783ccaddacf60a3\PublicReputationDetail $currentReputation;
    /**
     * Phone number.
     * Example: "14155551234"
     */
    public string $phoneNumber;
    public \InfobipSDK\Enums\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\PublicHiyaReputationAvailability $reputationAvailable;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'businessId' => is_string($value) ? $this->businessId = $value : parent::assignMember($name, $value),
            'currentReputation' => $value instanceof \stdClass ? $this->currentReputation = new \InfobipSDK\DTOs\Eb9826dda36bfa834ba8eec2d30e3749cbed4dee9bcabc5eb783ccaddacf60a3\PublicReputationDetail($value) : parent::assignMember($name, $value),
            'phoneNumber' => is_string($value) ? $this->phoneNumber = $value : parent::assignMember($name, $value),
            'reputationAvailable' => is_string($value) ? $this->reputationAvailable = \InfobipSDK\Enums\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\PublicHiyaReputationAvailability::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
