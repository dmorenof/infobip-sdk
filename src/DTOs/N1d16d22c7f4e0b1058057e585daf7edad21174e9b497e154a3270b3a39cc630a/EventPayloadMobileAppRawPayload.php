<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N1d16d22c7f4e0b1058057e585daf7edad21174e9b497e154a3270b3a39cc630a;

/**
 * EventPayloadMobileAppRawPayload
 *
 * Contains the event-specific data. The SDK automatically collects [some mobile system data](https://www.infobip.com/docs/mobile-push/mobile-audience-profiling#installation-information-person-installation-attributes) that defines an installation.
 */
final class EventPayloadMobileAppRawPayload extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Application code identifier.
     * Example: "11110000aaaabbbb22228888aaaaffff-00001111-2222-3333-4444-eeeeffff0000"
     */
    public string $appCode;
    /**
     * Version of the application running the SDK.
     * Example: "2.5.0"
     */
    public string $applicationVersion;
    /**
     * Manufacturer of the device.
     * Example: "XYZ"
     */
    public string $deviceManufacturer;
    /**
     * Model of the device.
     * Example: "sdk_phone64_arm64"
     */
    public string $deviceModel;
    public \InfobipSDK\DTOs\N1d16d22c7f4e0b1058057e585daf7edad21174e9b497e154a3270b3a39cc630a\InvokerInfo $invoker;
    /**
     * Identifier of the language used in the device.
     * Example: "en"
     */
    public string $osLanguage;
    /**
     * Version of the operating system.
     * Example: "16"
     */
    public string $osVersion;
    public \InfobipSDK\DTOs\N1d16d22c7f4e0b1058057e585daf7edad21174e9b497e154a3270b3a39cc630a\PersonBasicInfo $person;
    /**
     * Platform of the mobile device.
     * Example: "Android"
     */
    public string $platform;
    /**
     * Registration identifier of a particular push device registration.
     * Example: "AAAABBBB-ABC1-F001-0000-00009999FFFF"
     */
    public string $pushRegId;
    /**
     * SDK version running on the device.
     * Example: "1.5.0"
     */
    public string $sdkVersion;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'appCode' => is_string($value) ? $this->appCode = $value : parent::assignMember($name, $value),
            'applicationVersion' => is_string($value) ? $this->applicationVersion = $value : parent::assignMember($name, $value),
            'deviceManufacturer' => is_string($value) ? $this->deviceManufacturer = $value : parent::assignMember($name, $value),
            'deviceModel' => is_string($value) ? $this->deviceModel = $value : parent::assignMember($name, $value),
            'invoker' => $value instanceof \stdClass ? $this->invoker = new \InfobipSDK\DTOs\N1d16d22c7f4e0b1058057e585daf7edad21174e9b497e154a3270b3a39cc630a\InvokerInfo($value) : parent::assignMember($name, $value),
            'osLanguage' => is_string($value) ? $this->osLanguage = $value : parent::assignMember($name, $value),
            'osVersion' => is_string($value) ? $this->osVersion = $value : parent::assignMember($name, $value),
            'person' => $value instanceof \stdClass ? $this->person = new \InfobipSDK\DTOs\N1d16d22c7f4e0b1058057e585daf7edad21174e9b497e154a3270b3a39cc630a\PersonBasicInfo($value) : parent::assignMember($name, $value),
            'platform' => is_string($value) ? $this->platform = $value : parent::assignMember($name, $value),
            'pushRegId' => is_string($value) ? $this->pushRegId = $value : parent::assignMember($name, $value),
            'sdkVersion' => is_string($value) ? $this->sdkVersion = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
