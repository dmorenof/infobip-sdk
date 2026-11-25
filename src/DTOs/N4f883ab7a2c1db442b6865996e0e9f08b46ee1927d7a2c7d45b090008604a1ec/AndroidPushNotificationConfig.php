<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N4f883ab7a2c1db442b6865996e0e9f08b46ee1927d7a2c7d45b090008604a1ec;

/**
 * AndroidPushNotificationConfig
 *
 * Optional. Required if ios is not set. Configuration used to enable Android push notifications.
 */
final class AndroidPushNotificationConfig extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'privateKeyJson',
    ];

    /**
     * Private key JSON file used to enable Android push notifications.
     */
    public string $privateKeyJson;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'privateKeyJson' => is_string($value) ? $this->privateKeyJson = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
