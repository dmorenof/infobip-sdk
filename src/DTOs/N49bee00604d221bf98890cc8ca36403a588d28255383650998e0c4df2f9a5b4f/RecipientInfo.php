<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N49bee00604d221bf98890cc8ca36403a588d28255383650998e0c4df2f9a5b4f;

/**
 * RecipientInfo
 *
 * Recipient information such as IP address, device type, OS, device name, user agent.
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
     * IP address of the device that performed the user action.
     */
    public string $ipAddress;
    /**
     * The type OS present in the device used by the recipient.
     */
    public string $os;
    /**
     * The user agent string of the recipient's device that initiated the user action.
     */
    public string $userAgent;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'deviceName' => is_string($value) ? $this->deviceName = $value : parent::assignMember($name, $value),
            'deviceType' => is_string($value) ? $this->deviceType = $value : parent::assignMember($name, $value),
            'ipAddress' => is_string($value) ? $this->ipAddress = $value : parent::assignMember($name, $value),
            'os' => is_string($value) ? $this->os = $value : parent::assignMember($name, $value),
            'userAgent' => is_string($value) ? $this->userAgent = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
