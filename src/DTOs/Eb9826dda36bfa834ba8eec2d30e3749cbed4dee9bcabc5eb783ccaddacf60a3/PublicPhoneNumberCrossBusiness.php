<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\Eb9826dda36bfa834ba8eec2d30e3749cbed4dee9bcabc5eb783ccaddacf60a3;

/**
 * PublicPhoneNumberCrossBusiness
 */
final class PublicPhoneNumberCrossBusiness extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'businessId',
    'phoneNumber',
    'status',
];

    /**
     * Business ID the number is registered under.
     * Example: "a1b2c3d4-e5f6-7890-abcd-ef1234567890"
     * Format: uuid
     */
    public string $businessId;
    public \InfobipSDK\DTOs\Eb9826dda36bfa834ba8eec2d30e3749cbed4dee9bcabc5eb783ccaddacf60a3\PublicReputationDetail $currentReputation;
    /**
     * Registration job/batch name.
     * Example: "batch-2026-07-15"
     */
    public string $jobName;
    /**
     * Date and time when the reputation was last refreshed.
     * Example: "2026-07-21T10:30:00Z"
     * Format: date-time
     */
    public string $lastUpdated;
    /**
     * Phone number.
     * Example: "14155551234"
     */
    public string $phoneNumber;
    /**
     * Date and time when the number was registered.
     * Example: "2026-07-15T11:00:00Z"
     * Format: date-time
     */
    public string $registered;
    public \InfobipSDK\Enums\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\PublicHiyaReputationAvailability $reputationAvailable;
    public \InfobipSDK\Enums\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\PublicHiyaPhoneNumberStatus $status;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'businessId' => is_string($value) ? $this->businessId = $value : parent::assignMember($name, $value),
            'currentReputation' => $value instanceof \stdClass ? $this->currentReputation = new \InfobipSDK\DTOs\Eb9826dda36bfa834ba8eec2d30e3749cbed4dee9bcabc5eb783ccaddacf60a3\PublicReputationDetail($value) : parent::assignMember($name, $value),
            'jobName' => is_string($value) ? $this->jobName = $value : parent::assignMember($name, $value),
            'lastUpdated' => is_string($value) ? $this->lastUpdated = $value : parent::assignMember($name, $value),
            'phoneNumber' => is_string($value) ? $this->phoneNumber = $value : parent::assignMember($name, $value),
            'registered' => is_string($value) ? $this->registered = $value : parent::assignMember($name, $value),
            'reputationAvailable' => is_string($value) ? $this->reputationAvailable = \InfobipSDK\Enums\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\PublicHiyaReputationAvailability::from($value) : parent::assignMember($name, $value),
            'status' => is_string($value) ? $this->status = \InfobipSDK\Enums\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\PublicHiyaPhoneNumberStatus::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
