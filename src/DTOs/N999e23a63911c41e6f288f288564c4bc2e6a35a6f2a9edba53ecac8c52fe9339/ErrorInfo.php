<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N999e23a63911c41e6f288f288564c4bc2e6a35a6f2a9edba53ecac8c52fe9339;

/**
 * ErrorInfo
 *
 * Messages not delivered to users.
 */
final class ErrorInfo extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'cloud',
        'expired',
        'registration',
    ];

    /**
     * Messages not delivered due to errors on APNS or FCM clouds. Happens due to transient errors on cloud services.
     * Format: int64
     */
    public int $cloud;
    /**
     * Messages undelivered due to expired validity period. Indicates users who have disabled notifications on a specific Push application.
     * Format: int64
     */
    public int $expired;
    /**
     * Messages not delivered due to errors with non-valid registrations due to user uninstalling the app.
     * Format: int64
     */
    public int $registration;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'cloud' => is_int($value) ? $this->cloud = $value : parent::assignMember($name, $value),
            'expired' => is_int($value) ? $this->expired = $value : parent::assignMember($name, $value),
            'registration' => is_int($value) ? $this->registration = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
