<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N7c77a2c703ce12a601f120565936de62cf48d1baf9232d5411f82fc339353553;

/**
 * Open Channel
 *
 * Information about Open Channel type of resource.
 */
final class OpenChannelResourceInfo extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'capabilities' => [
            'uniqueItems' => true,
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
     * Resource name.
     * Example: "MyResource"
     */
    public string $resource;
    public \InfobipSDK\Enums\N7c77a2c703ce12a601f120565936de62cf48d1baf9232d5411f82fc339353553\IbResourceType $resourceType;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'resource' => is_string($value) ? $this->resource = $value : parent::assignMember($name, $value),
            'resourceType' => is_string($value) ? $this->resourceType = \InfobipSDK\Enums\N7c77a2c703ce12a601f120565936de62cf48d1baf9232d5411f82fc339353553\IbResourceType::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
