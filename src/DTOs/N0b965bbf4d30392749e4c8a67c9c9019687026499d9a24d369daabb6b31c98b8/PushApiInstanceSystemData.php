<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N0b965bbf4d30392749e4c8a67c9c9019687026499d9a24d369daabb6b31c98b8;

/**
 * PushApiInstanceSystemData
 *
 * Set of push-specific attributes
 */
final class PushApiInstanceSystemData extends \Dmorenof\SdkRuntime\DTO
{
    protected const array READ_ONLY_FIELDS = [
    'appVersion',
    'deviceManufacturer',
    'deviceModel',
    'deviceName',
    'deviceSecure',
    'deviceTimezoneOffset',
    'geofencingSdk',
    'notificationsEnabled',
    'osLanguage',
    'osVersion',
    'sdkVersion',
];

    /**
     * The version of the application which SDK is embedded into
     */
    public string $appVersion;
    public \InfobipSDK\Enums\N0b965bbf4d30392749e4c8a67c9c9019687026499d9a24d369daabb6b31c98b8\CloudType $cloudType;
    /**
     * The manufacturer of the device as detected by the SDK
     */
    public string $deviceManufacturer;
    /**
     * The model of the device
     */
    public string $deviceModel;
    /**
     * The name of the device as configured by a user
     */
    public string $deviceName;
    /**
     * Set to `true` if the device has any type of secure screen lock set up
     */
    public bool $deviceSecure;
    /**
     * UTC-related timezone offset that identifies a current timezone of a device
     */
    public string $deviceTimezoneOffset;
    /**
     * Set to `true` if geo fencing is enabled on a device. **Deprecated: This property is no longer in use since iOS SDK version 12.19.0 and Android SDK version 13.0.3.**
     *
     * @deprecated
     */
    public bool $geofencingSdk;
    /**
     * Set to `true` if notifications are enabled on a device
     */
    public bool $notificationsEnabled;
    public \InfobipSDK\Enums\N0b965bbf4d30392749e4c8a67c9c9019687026499d9a24d369daabb6b31c98b8\OperatingSystem $os;
    /**
     * An identifier of the language used on a device
     */
    public string $osLanguage;
    /**
     * The version of the operating system
     */
    public string $osVersion;
    /**
     * State of the device registration
     */
    public bool $registrationEnabled;
    /**
     * SDK version that is running on a device
     */
    public string $sdkVersion;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'appVersion' => is_string($value) ? $this->appVersion = $value : parent::assignMember($name, $value),
            'cloudType' => is_string($value) ? $this->cloudType = \InfobipSDK\Enums\N0b965bbf4d30392749e4c8a67c9c9019687026499d9a24d369daabb6b31c98b8\CloudType::from($value) : parent::assignMember($name, $value),
            'deviceManufacturer' => is_string($value) ? $this->deviceManufacturer = $value : parent::assignMember($name, $value),
            'deviceModel' => is_string($value) ? $this->deviceModel = $value : parent::assignMember($name, $value),
            'deviceName' => is_string($value) ? $this->deviceName = $value : parent::assignMember($name, $value),
            'deviceSecure' => is_bool($value) ? $this->deviceSecure = $value : parent::assignMember($name, $value),
            'deviceTimezoneOffset' => is_string($value) ? $this->deviceTimezoneOffset = $value : parent::assignMember($name, $value),
            'geofencingSdk' => is_bool($value) ? $this->geofencingSdk = $value : parent::assignMember($name, $value),
            'notificationsEnabled' => is_bool($value) ? $this->notificationsEnabled = $value : parent::assignMember($name, $value),
            'os' => is_string($value) ? $this->os = \InfobipSDK\Enums\N0b965bbf4d30392749e4c8a67c9c9019687026499d9a24d369daabb6b31c98b8\OperatingSystem::from($value) : parent::assignMember($name, $value),
            'osLanguage' => is_string($value) ? $this->osLanguage = $value : parent::assignMember($name, $value),
            'osVersion' => is_string($value) ? $this->osVersion = $value : parent::assignMember($name, $value),
            'registrationEnabled' => is_bool($value) ? $this->registrationEnabled = $value : parent::assignMember($name, $value),
            'sdkVersion' => is_string($value) ? $this->sdkVersion = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
