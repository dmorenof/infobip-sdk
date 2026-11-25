<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\Bb8af9c2d2d4d677e25555100e31662e23d86ede8b5d73bbf4974b4decdd08d7;

/**
 * UpdateApiKeyRequestV1
 */
final class UpdateApiKeyRequestV1 extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * List of allowed IP addresses from which this API key can be used
     */
    public \InfobipSDK\Collections\StringCollection $allowedIPs;
    /**
     * Enable or disable api key.
     */
    public bool $enabled;
    /**
     * Api key name
     */
    public string $name;
    /**
     * List of permissions this API key has granted. This data may be inaccurate. Migrate to new API key management endpoints and use API scopes for fine grained control.
     */
    public \InfobipSDK\Collections\Bb8af9c2d2d4d677e25555100e31662e23d86ede8b5d73bbf4974b4decdd08d7\ApiKeyResponse\PermissionsCollection $permissions;
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
            'allowedIPs' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->allowedIPs = new \InfobipSDK\Collections\StringCollection($value) : parent::assignMember($name, $value),
            'enabled' => is_bool($value) ? $this->enabled = $value : parent::assignMember($name, $value),
            'name' => is_string($value) ? $this->name = $value : parent::assignMember($name, $value),
            'validFrom' => is_string($value) ? $this->validFrom = $value : parent::assignMember($name, $value),
            'validTo' => is_string($value) ? $this->validTo = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
