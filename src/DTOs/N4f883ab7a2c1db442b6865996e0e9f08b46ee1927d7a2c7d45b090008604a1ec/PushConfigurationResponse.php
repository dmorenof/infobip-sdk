<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N4f883ab7a2c1db442b6865996e0e9f08b46ee1927d7a2c7d45b090008604a1ec;

/**
 * PushConfigurationResponse
 */
final class PushConfigurationResponse extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Flag indicating whether the Android push notification config is set.
     */
    public bool $androidConfigured;
    /**
     * The identifier to associate the push configuration with.
     */
    public string $id;
    /**
     * Flag indicating whether the iOS push notification config is set.
     */
    public bool $iosConfigured;
    /**
     * Name describing the push configuration.
     */
    public string $name;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'androidConfigured' => is_bool($value) ? $this->androidConfigured = $value : parent::assignMember($name, $value),
            'id' => is_string($value) ? $this->id = $value : parent::assignMember($name, $value),
            'iosConfigured' => is_bool($value) ? $this->iosConfigured = $value : parent::assignMember($name, $value),
            'name' => is_string($value) ? $this->name = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
