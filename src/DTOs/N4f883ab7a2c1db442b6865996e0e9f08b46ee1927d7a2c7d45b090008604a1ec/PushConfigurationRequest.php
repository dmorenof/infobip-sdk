<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N4f883ab7a2c1db442b6865996e0e9f08b46ee1927d7a2c7d45b090008604a1ec;

/**
 * PushConfigurationRequest
 */
final class PushConfigurationRequest extends \Dmorenof\SdkRuntime\DTO
{
    public \InfobipSDK\DTOs\N4f883ab7a2c1db442b6865996e0e9f08b46ee1927d7a2c7d45b090008604a1ec\AndroidPushNotificationConfig $android;
    public \InfobipSDK\DTOs\N4f883ab7a2c1db442b6865996e0e9f08b46ee1927d7a2c7d45b090008604a1ec\IosPushNotificationConfig $ios;
    /**
     * Optional. Name describing the push configuration.
     */
    public string $name;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'android' => $value instanceof \stdClass ? $this->android = new \InfobipSDK\DTOs\N4f883ab7a2c1db442b6865996e0e9f08b46ee1927d7a2c7d45b090008604a1ec\AndroidPushNotificationConfig($value) : parent::assignMember($name, $value),
            'ios' => $value instanceof \stdClass ? $this->ios = new \InfobipSDK\DTOs\N4f883ab7a2c1db442b6865996e0e9f08b46ee1927d7a2c7d45b090008604a1ec\IosPushNotificationConfig($value) : parent::assignMember($name, $value),
            'name' => is_string($value) ? $this->name = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
