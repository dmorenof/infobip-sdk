<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N7c77a2c703ce12a601f120565936de62cf48d1baf9232d5411f82fc339353553;

/**
 * ViberCoverageKey
 */
final class ViberCoverageKey extends \InfobipSDK\DTOs\N7c77a2c703ce12a601f120565936de62cf48d1baf9232d5411f82fc339353553\IbResourceCoverageKey
{
    public const array REQUIRED_FIELDS = [
    'resourceType',
];

    protected const array VALIDATION = [
    'countryCode' => [
        'minLength' => 1,
        'pattern' => '^[A-Z]{2}$',
    ],
    'resource' => [
        'minLength' => 0,
        'maxLength' => 255,
    ],
];

    protected const string ADDITIONAL_PROPERTIES_TYPE = 'mixed';
    protected const bool ADDITIONAL_PROPERTIES_NULLABLE = false;

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
     * Original resource name.
     * Example: "MyOriginalResource"
     */
    public string $originalResourceName;
    /**
     * Resource name.
     * Example: "MyResource"
     */
    public string $resource {
        set {
            $this->assigning('resource', $value);
            $this->resource = $value;
        }
    }
    /**
     * Indicates whether a resource is shared.
     */
    public bool $shared;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'countryCode' => is_string($value) ? $this->countryCode = $value : parent::assignMember($name, $value),
            'originalResourceName' => is_string($value) ? $this->originalResourceName = $value : parent::assignMember($name, $value),
            'resource' => is_string($value) ? $this->resource = $value : parent::assignMember($name, $value),
            'shared' => is_bool($value) ? $this->shared = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
