<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\Bb8af9c2d2d4d677e25555100e31662e23d86ede8b5d73bbf4974b4decdd08d7;

/**
 * CreateApiKeyRequest
 */
final class CreateApiKeyRequest extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'name',
    ];

    protected const array VALIDATION = [
        'name' => [
            'minLength' => 1,
        ],
        'permissions' => [
            'jsonSchema' => '{"enum":["2FA_CLIENT","PUBLIC_API","WEB_SDK"]}',
        ],
        'scopeGuids' => [
            'uniqueItems' => true,
        ],
    ];

    /**
     * Unique identifier for account this API key will belong to. If not provided accountId of the user making the API request will be set. CPaaSX Applications and Entities can be set only on api keys that belong to the account of the user making the request and only if that account is main account.
     */
    public string $accountId;
    /**
     * List of IP addresses or IP ranges from which this API key will be used. Authentication will fail from any other IP not specified in this list.
     * Documentation: https://www.infobip.com/docs/essentials/security-recommendations#entry-point-specific-users
     */
    public \InfobipSDK\Collections\StringCollection $allowedIPs;
    /**
     * Name of this API Key.
     */
    public string $name {
        set {
            $this->assigning('name', $value);
            $this->name = $value;
        }
    }
    /**
     * List of permissions this API key has granted. Default permission is 'PUBLIC_API'. API key cannot be created with both 'PUBLIC_API' and 'WEB_SDK' permissions. API key cannot be created with both permissions and a collection of Applications and/or Entities in <code>platform</code>.
     */
    public \InfobipSDK\Collections\Bb8af9c2d2d4d677e25555100e31662e23d86ede8b5d73bbf4974b4decdd08d7\CreateApiKeyRequest\PermissionsCollection $permissions {
        set {
            $this->assigning('permissions', $value);
            $this->permissions = $value;
        }
    }
    /**
     * A collection of CPaaS X Applications and Entities that will be linked to the API Key. API key cannot be created with both permissions and a collection of Applications and/or Entities.
     * Documentation: https://www.infobip.com/docs/cpaas-x/application-and-entity-management#api-keys-endpoints-list-api-keys-with-application-and-entity
     */
    public \InfobipSDK\Collections\Bb8af9c2d2d4d677e25555100e31662e23d86ede8b5d73bbf4974b4decdd08d7\ApiKey\PlatformCollection $platform;
    /**
     * List of [API scopes](https://www.infobip.com/docs/essentials/api-essentials/api-authorization#available-api-scopes-api-scopes) that will be assigned to the API key.
     */
    public \InfobipSDK\Collections\N0089ea7cf06f0b77e4c88a7276c6f25dd5c0c5bbab819756fc42c548980cae19\FlowDataResponse\InitialScreensCollection $scopeGuids {
        set {
            $this->assigning('scopeGuids', $value);
            $this->scopeGuids = $value;
        }
    }
    /**
     * Date from which this API key will be valid. Time is in UTC. Should not be earlier than creation date. If not provided default is date of creation.
     * Format: date-time
     */
    public string $validFrom;
    /**
     * Date until this API key will be valid. Time is in UTC. Should not be earlier than validFrom or creation time. If not provided default is 1 year from creation.
     * Format: date-time
     */
    public string $validTo;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'accountId' => is_string($value) ? $this->accountId = $value : parent::assignMember($name, $value),
            'allowedIPs' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->allowedIPs = new \InfobipSDK\Collections\StringCollection($value) : parent::assignMember($name, $value),
            'name' => is_string($value) ? $this->name = $value : parent::assignMember($name, $value),
            'platform' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->platform = new \InfobipSDK\Collections\Bb8af9c2d2d4d677e25555100e31662e23d86ede8b5d73bbf4974b4decdd08d7\ApiKey\PlatformCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \InfobipSDK\DTOs\Bb8af9c2d2d4d677e25555100e31662e23d86ede8b5d73bbf4974b4decdd08d7\Platform::class)) : parent::assignMember($name, $value),
            'scopeGuids' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->scopeGuids = new \InfobipSDK\Collections\N0089ea7cf06f0b77e4c88a7276c6f25dd5c0c5bbab819756fc42c548980cae19\FlowDataResponse\InitialScreensCollection($value) : parent::assignMember($name, $value),
            'validFrom' => is_string($value) ? $this->validFrom = $value : parent::assignMember($name, $value),
            'validTo' => is_string($value) ? $this->validTo = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
