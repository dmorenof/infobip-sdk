<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N7c77a2c703ce12a601f120565936de62cf48d1baf9232d5411f82fc339353553;

/**
 * Number
 *
 * Information about the numeric type of resource.
 */
final class NumberResourceInfo extends \Dmorenof\SdkRuntime\DTO
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
     * Capabilities of the number.
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
     * Phone number.
     * Example: "447860041117"
     */
    public string $number;
    /**
     * Number key.
     * Example: "58B3840032C7774BAC840EEEA2C23A44"
     */
    public string $numberKey;
    public \InfobipSDK\Enums\N7c77a2c703ce12a601f120565936de62cf48d1baf9232d5411f82fc339353553\NumberTypeResourceMoDocs $numberType;
    public \InfobipSDK\DTOs\N7c77a2c703ce12a601f120565936de62cf48d1baf9232d5411f82fc339353553\PlatformDocs $platform;
    public \InfobipSDK\Enums\N7c77a2c703ce12a601f120565936de62cf48d1baf9232d5411f82fc339353553\IbResourceType $resourceType;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'countryCode' => is_string($value) ? $this->countryCode = $value : parent::assignMember($name, $value),
            'countryName' => is_string($value) ? $this->countryName = $value : parent::assignMember($name, $value),
            'number' => is_string($value) ? $this->number = $value : parent::assignMember($name, $value),
            'numberKey' => is_string($value) ? $this->numberKey = $value : parent::assignMember($name, $value),
            'numberType' => is_string($value) ? $this->numberType = \InfobipSDK\Enums\N7c77a2c703ce12a601f120565936de62cf48d1baf9232d5411f82fc339353553\NumberTypeResourceMoDocs::from($value) : parent::assignMember($name, $value),
            'platform' => $value instanceof \stdClass ? $this->platform = new \InfobipSDK\DTOs\N7c77a2c703ce12a601f120565936de62cf48d1baf9232d5411f82fc339353553\PlatformDocs($value) : parent::assignMember($name, $value),
            'resourceType' => is_string($value) ? $this->resourceType = \InfobipSDK\Enums\N7c77a2c703ce12a601f120565936de62cf48d1baf9232d5411f82fc339353553\IbResourceType::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
