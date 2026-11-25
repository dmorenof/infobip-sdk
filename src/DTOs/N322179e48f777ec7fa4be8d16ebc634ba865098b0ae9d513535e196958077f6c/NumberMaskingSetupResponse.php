<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N322179e48f777ec7fa4be8d16ebc634ba865098b0ae9d513535e196958077f6c;

/**
 * NumberMaskingSetupResponse
 */
final class NumberMaskingSetupResponse extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * If callbackUrl is unavailable this one will be called instead.
     */
    public string $backupCallbackUrl;
    /**
     * If statusUrl is unavailable this one will be called instead.
     */
    public string $backupStatusUrl;
    /**
     * Client's URL that will be called on each inbound call to related Number masking Voice number in order to get instructions of how to handle incoming calls. Instructions are a result of mapping logic implemented on your side according to your business case.
     */
    public string $callbackUrl;
    /**
     * Masking configuration description
     */
    public string $description;
    /**
     * Date and time (UTC timezone) when masking configuration is created.
     * Format: date-time
     */
    public string $insertDateTime;
    /**
     * Use to connect masking configuration with Voice-enabled number.
     */
    public string $key;
    /**
     * Unique configuration name. Alphanumeric, max length 100.
     */
    public string $name;
    /**
     * Client's URL for status report delivery after the call is finished.
     */
    public string $statusUrl;
    /**
     * Date and time (UTC timezone) when masking configuration was last modified.
     * Format: date-time
     */
    public string $updateDateTime;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'backupCallbackUrl' => is_string($value) ? $this->backupCallbackUrl = $value : parent::assignMember($name, $value),
            'backupStatusUrl' => is_string($value) ? $this->backupStatusUrl = $value : parent::assignMember($name, $value),
            'callbackUrl' => is_string($value) ? $this->callbackUrl = $value : parent::assignMember($name, $value),
            'description' => is_string($value) ? $this->description = $value : parent::assignMember($name, $value),
            'insertDateTime' => is_string($value) ? $this->insertDateTime = $value : parent::assignMember($name, $value),
            'key' => is_string($value) ? $this->key = $value : parent::assignMember($name, $value),
            'name' => is_string($value) ? $this->name = $value : parent::assignMember($name, $value),
            'statusUrl' => is_string($value) ? $this->statusUrl = $value : parent::assignMember($name, $value),
            'updateDateTime' => is_string($value) ? $this->updateDateTime = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
