<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N7c77a2c703ce12a601f120565936de62cf48d1baf9232d5411f82fc339353553;

/**
 * Facebook
 *
 * Information about the sender coverage.
 */
final class FacebookCoverageInfo extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
    'capabilities' => [
        'uniqueItems' => true,
    ],
    'countryCode' => [
        'pattern' => '^[A-Z]{2}$',
    ],
];

    public \InfobipSDK\Collections\N7c77a2c703ce12a601f120565936de62cf48d1baf9232d5411f82fc339353553\AlphaCoverageInfo\CapabilitiesCollection $capabilities {
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
     * Display name.
     * Example: "MyDisplayName"
     */
    public string $displayName;
    /**
     * Resource name.
     * Example: "MyResource"
     */
    public string $resource;
    public \InfobipSDK\Enums\N7c77a2c703ce12a601f120565936de62cf48d1baf9232d5411f82fc339353553\IbResourceType $resourceType;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'capabilities' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->capabilities = new \InfobipSDK\Collections\N7c77a2c703ce12a601f120565936de62cf48d1baf9232d5411f82fc339353553\AlphaCoverageInfo\CapabilitiesCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \InfobipSDK\DTOs\N7c77a2c703ce12a601f120565936de62cf48d1baf9232d5411f82fc339353553\IbResourceCapability::class)) : parent::assignMember($name, $value),
            'countryCode' => is_string($value) ? $this->countryCode = $value : parent::assignMember($name, $value),
            'countryName' => is_string($value) ? $this->countryName = $value : parent::assignMember($name, $value),
            'displayName' => is_string($value) ? $this->displayName = $value : parent::assignMember($name, $value),
            'resource' => is_string($value) ? $this->resource = $value : parent::assignMember($name, $value),
            'resourceType' => is_string($value) ? $this->resourceType = \InfobipSDK\Enums\N7c77a2c703ce12a601f120565936de62cf48d1baf9232d5411f82fc339353553\IbResourceType::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
