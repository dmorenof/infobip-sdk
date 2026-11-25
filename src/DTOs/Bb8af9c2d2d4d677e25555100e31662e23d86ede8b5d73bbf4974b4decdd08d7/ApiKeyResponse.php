<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\Bb8af9c2d2d4d677e25555100e31662e23d86ede8b5d73bbf4974b4decdd08d7;

/**
 * ApiKeyResponse
 */
final class ApiKeyResponse extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'name',
];

    /**
     * Unique identifier for account this API key belongs to.
     */
    public string $accountKey;
    /**
     * List of allowed IP addresses from which this API key will be used. Authentication will fail from any other IP not specified in this list.
     */
    public \InfobipSDK\Collections\StringCollection $allowedIPs;
    /**
     * Is API key enabled.
     */
    public bool $enabled;
    /**
     * Unique key specifying this api key.
     */
    public string $key;
    /**
     * Name of this API Key.
     */
    public string $name;
    /**
     * List of permissions this API key has granted.
     */
    public \InfobipSDK\Collections\Bb8af9c2d2d4d677e25555100e31662e23d86ede8b5d73bbf4974b4decdd08d7\ApiKeyResponse\PermissionsCollection $permissions;
    /**
     * Authentication key. Use this value for authentication on API. Keep this in secure storage and don't share it.
     */
    public string $publicApiKey;
    /**
     * Date from which this API key is/will be valid. Time is in UTC.
     * Format: date-time
     */
    public string $validFrom;
    /**
     * Date until this API key will be valid. Time is in UTC.
     * Format: date-time
     */
    public string $validTo;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'accountKey' => is_string($value) ? $this->accountKey = $value : parent::assignMember($name, $value),
            'allowedIPs' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->allowedIPs = new \InfobipSDK\Collections\StringCollection($value) : parent::assignMember($name, $value),
            'enabled' => is_bool($value) ? $this->enabled = $value : parent::assignMember($name, $value),
            'key' => is_string($value) ? $this->key = $value : parent::assignMember($name, $value),
            'name' => is_string($value) ? $this->name = $value : parent::assignMember($name, $value),
            'publicApiKey' => is_string($value) ? $this->publicApiKey = $value : parent::assignMember($name, $value),
            'validFrom' => is_string($value) ? $this->validFrom = $value : parent::assignMember($name, $value),
            'validTo' => is_string($value) ? $this->validTo = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
