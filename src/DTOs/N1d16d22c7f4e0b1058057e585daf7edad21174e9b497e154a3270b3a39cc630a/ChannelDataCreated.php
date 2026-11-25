<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N1d16d22c7f4e0b1058057e585daf7edad21174e9b497e154a3270b3a39cc630a;

/**
 * ChannelDataCreated
 *
 * Details about the communication channel associated with this event.
 */
final class ChannelDataCreated extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Application ID.
     * Example: "applicationId"
     */
    public string $appId;
    /**
     * Application version.
     * Example: "2.3.4"
     */
    public string $appVersion;
    /**
     * User's first name.
     * Example: "John"
     */
    public string $firstName;
    /**
     * User's gender.
     * Example: "F"
     */
    public string $gender;
    /**
     * User's last name.
     * Example: "Doe"
     */
    public string $lastName;
    /**
     * Locale of the user.
     * Example: "en-US"
     */
    public string $locale;
    /**
     * Operating system of the device.
     * Example: "iOS"
     */
    public string $os;
    /**
     * Operating system version.
     * Example: "16.2"
     */
    public string $osVersion;
    /**
     * Indicates whether the channel is marked as preferred.
     * Example: "false"
     */
    public string $preferred;
    /**
     * Application ID for push notifications.
     * Example: "23131"
     */
    public string $pushAppId;
    /**
     * Push notification registration ID.
     * Example: "e8f5c3d9-4a1b-4f7c-9d12-3b6a7f8e9d0c"
     */
    public string $pushRegId;
    /**
     * Registration ID.
     * Example: "registrationId"
     */
    public string $regId;
    /**
     * SDK version used for registration.
     * Example: "5.0.1"
     */
    public string $sdkVersion;
    /**
     * System or source where the action originated.
     * Example: "API"
     */
    public string $source;
    /**
     * Unique identifier of the source system record that caused the action.
     * Example: "sourceId"
     */
    public string $sourceId;
    /**
     * Timezone of the user.
     * Example: "timezone"
     */
    public string $timezone;
    /**
     * Type of the communication channel.
     * Example: "EMAIL"
     */
    public \InfobipSDK\Enums\N1d16d22c7f4e0b1058057e585daf7edad21174e9b497e154a3270b3a39cc630a\ChannelDataCreated\TypeEnum $type;
    /**
     * Value associated with the channel.
     * Example: "385123456789"
     */
    public string $value;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'appId' => is_string($value) ? $this->appId = $value : parent::assignMember($name, $value),
            'appVersion' => is_string($value) ? $this->appVersion = $value : parent::assignMember($name, $value),
            'firstName' => is_string($value) ? $this->firstName = $value : parent::assignMember($name, $value),
            'gender' => is_string($value) ? $this->gender = $value : parent::assignMember($name, $value),
            'lastName' => is_string($value) ? $this->lastName = $value : parent::assignMember($name, $value),
            'locale' => is_string($value) ? $this->locale = $value : parent::assignMember($name, $value),
            'os' => is_string($value) ? $this->os = $value : parent::assignMember($name, $value),
            'osVersion' => is_string($value) ? $this->osVersion = $value : parent::assignMember($name, $value),
            'preferred' => is_string($value) ? $this->preferred = $value : parent::assignMember($name, $value),
            'pushAppId' => is_string($value) ? $this->pushAppId = $value : parent::assignMember($name, $value),
            'pushRegId' => is_string($value) ? $this->pushRegId = $value : parent::assignMember($name, $value),
            'regId' => is_string($value) ? $this->regId = $value : parent::assignMember($name, $value),
            'sdkVersion' => is_string($value) ? $this->sdkVersion = $value : parent::assignMember($name, $value),
            'source' => is_string($value) ? $this->source = $value : parent::assignMember($name, $value),
            'sourceId' => is_string($value) ? $this->sourceId = $value : parent::assignMember($name, $value),
            'timezone' => is_string($value) ? $this->timezone = $value : parent::assignMember($name, $value),
            'type' => is_string($value) ? $this->type = \InfobipSDK\Enums\N1d16d22c7f4e0b1058057e585daf7edad21174e9b497e154a3270b3a39cc630a\ChannelDataCreated\TypeEnum::from($value) : parent::assignMember($name, $value),
            'value' => is_string($value) ? $this->value = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
