<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N20085a4036d67f66ebf204560d55d58a7c131c15d42c8ed9442747c488e08630;

/**
 * RecipientInfo
 *
 * Recipient information such as device type, OS, device name.
 */
final class RecipientInfo extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Device name of the action originating device.
     */
    public string $deviceName;
    /**
     * The type of device used by the recipient to do the user action.
     */
    public string $deviceType;
    /**
     * The type OS present in the device used by the recipient.
     */
    public string $os;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'deviceName' => is_string($value) ? $this->deviceName = $value : parent::assignMember($name, $value),
            'deviceType' => is_string($value) ? $this->deviceType = $value : parent::assignMember($name, $value),
            'os' => is_string($value) ? $this->os = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
