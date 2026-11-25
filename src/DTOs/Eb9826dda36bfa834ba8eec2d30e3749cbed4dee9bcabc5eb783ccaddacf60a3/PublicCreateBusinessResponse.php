<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\Eb9826dda36bfa834ba8eec2d30e3749cbed4dee9bcabc5eb783ccaddacf60a3;

/**
 * PublicCreateBusinessResponse
 */
final class PublicCreateBusinessResponse extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'businessId',
    ];

    /**
     * Unique business identifier (UUID).
     * Example: "a1b2c3d4-e5f6-7890-abcd-ef1234567890"
     * Format: uuid
     */
    public string $businessId;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'businessId' => is_string($value) ? $this->businessId = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
