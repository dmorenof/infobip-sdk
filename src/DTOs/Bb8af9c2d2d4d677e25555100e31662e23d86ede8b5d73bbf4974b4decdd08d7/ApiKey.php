<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\Bb8af9c2d2d4d677e25555100e31662e23d86ede8b5d73bbf4974b4decdd08d7;

/**
 * ApiKey
 */
final class ApiKey extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'name',
    ];

    protected const array VALIDATION = [
        'permissions' => [
            'uniqueItems' => true,
        ],
        'scopeGuids' => [
            'uniqueItems' => true,
        ],
    ];

    /**
     * Unique identifier for account this API key belongs to.
     */
    public string $accountId;
    /**
     * List of allowed IP addresses from which this API key will be used. Authentication will fail from any other IP not specified in this list.
     */
    public \InfobipSDK\Collections\StringCollection $allowedIPs;
    /**
     * Authentication key. Use this value for authentication on API. Keep this in secure storage and don't share it.
     */
    public string $apiKeySecret;
    /**
     * Is API key enabled.
     */
    public bool $enabled;
    /**
     * Unique identifier specifying this api key.
     */
    public string $id;
    /**
     * Name of this API Key.
     */
    public string $name;
    /**
     * List of permissions this API key has granted.
     */
    public \InfobipSDK\Collections\N0089ea7cf06f0b77e4c88a7276c6f25dd5c0c5bbab819756fc42c548980cae19\FlowDataResponse\InitialScreensCollection $permissions {
        set {
            $this->assigning('permissions', $value);
            $this->permissions = $value;
        }
    }
    /**
     * A collection of CPaaS X Applications and/or Entities associated with the API Key
     */
    public \InfobipSDK\Collections\Bb8af9c2d2d4d677e25555100e31662e23d86ede8b5d73bbf4974b4decdd08d7\ApiKey\PlatformCollection $platform;
    /**
     * List of Scopes assigned to API Key
     */
    public \InfobipSDK\Collections\N0089ea7cf06f0b77e4c88a7276c6f25dd5c0c5bbab819756fc42c548980cae19\FlowDataResponse\InitialScreensCollection $scopeGuids {
        set {
            $this->assigning('scopeGuids', $value);
            $this->scopeGuids = $value;
        }
    }
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
            'accountId' => is_string($value) ? $this->accountId = $value : parent::assignMember($name, $value),
            'allowedIPs' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->allowedIPs = new \InfobipSDK\Collections\StringCollection($value) : parent::assignMember($name, $value),
            'apiKeySecret' => is_string($value) ? $this->apiKeySecret = $value : parent::assignMember($name, $value),
            'enabled' => is_bool($value) ? $this->enabled = $value : parent::assignMember($name, $value),
            'id' => is_string($value) ? $this->id = $value : parent::assignMember($name, $value),
            'name' => is_string($value) ? $this->name = $value : parent::assignMember($name, $value),
            'permissions' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->permissions = new \InfobipSDK\Collections\N0089ea7cf06f0b77e4c88a7276c6f25dd5c0c5bbab819756fc42c548980cae19\FlowDataResponse\InitialScreensCollection($value) : parent::assignMember($name, $value),
            'platform' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->platform = new \InfobipSDK\Collections\Bb8af9c2d2d4d677e25555100e31662e23d86ede8b5d73bbf4974b4decdd08d7\ApiKey\PlatformCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \InfobipSDK\DTOs\Bb8af9c2d2d4d677e25555100e31662e23d86ede8b5d73bbf4974b4decdd08d7\Platform::class)) : parent::assignMember($name, $value),
            'scopeGuids' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->scopeGuids = new \InfobipSDK\Collections\N0089ea7cf06f0b77e4c88a7276c6f25dd5c0c5bbab819756fc42c548980cae19\FlowDataResponse\InitialScreensCollection($value) : parent::assignMember($name, $value),
            'validFrom' => is_string($value) ? $this->validFrom = $value : parent::assignMember($name, $value),
            'validTo' => is_string($value) ? $this->validTo = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
