<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N7c77a2c703ce12a601f120565936de62cf48d1baf9232d5411f82fc339353553;

/**
 * Viber
 *
 * Information about Viber type of resource.
 */
final class ViberResourceInfo extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
    'capabilities' => [
        'uniqueItems' => true,
    ],
    'countryCode' => [
        'pattern' => '^[A-Z]{2}$',
    ],
];

    /**
     * Capabilities of the sender.
     */
    public \InfobipSDK\Collections\N7c77a2c703ce12a601f120565936de62cf48d1baf9232d5411f82fc339353553\AlphaResourceInfo\CapabilitiesCollection $capabilities {
        set {
            $this->assigning('capabilities', $value);
            $this->capabilities = $value;
        }
    }
    /**
     * Country code in two-letter ISO standard. Required for identifying country specific resources (for instance, short code number types).
     * Example: "GB"
     */
    public string $countryCode {
        set {
            $this->assigning('countryCode', $value);
            $this->countryCode = $value;
        }
    }
    /**
     * Country name.
     * Example: "United Kingdom"
     */
    public string $countryName;
    /**
     * Original resource name.
     * Example: "MyOriginalResource"
     */
    public string $originalResourceName;
    /**
     * Resource name.
     * Example: "MyResource"
     */
    public string $resource;
    public \InfobipSDK\Enums\N7c77a2c703ce12a601f120565936de62cf48d1baf9232d5411f82fc339353553\IbResourceType $resourceType;
    /**
     * Indicates whether a resource is shared.
     */
    public bool $shared;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'countryCode' => is_string($value) ? $this->countryCode = $value : parent::assignMember($name, $value),
            'countryName' => is_string($value) ? $this->countryName = $value : parent::assignMember($name, $value),
            'originalResourceName' => is_string($value) ? $this->originalResourceName = $value : parent::assignMember($name, $value),
            'resource' => is_string($value) ? $this->resource = $value : parent::assignMember($name, $value),
            'resourceType' => is_string($value) ? $this->resourceType = \InfobipSDK\Enums\N7c77a2c703ce12a601f120565936de62cf48d1baf9232d5411f82fc339353553\IbResourceType::from($value) : parent::assignMember($name, $value),
            'shared' => is_bool($value) ? $this->shared = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
