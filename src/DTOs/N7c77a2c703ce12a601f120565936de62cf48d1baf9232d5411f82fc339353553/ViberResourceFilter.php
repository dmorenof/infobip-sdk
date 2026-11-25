<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N7c77a2c703ce12a601f120565936de62cf48d1baf9232d5411f82fc339353553;

/**
 * ViberResourceFilter
 *
 * Viber filter for resources.
 */
final class ViberResourceFilter extends \InfobipSDK\DTOs\N7c77a2c703ce12a601f120565936de62cf48d1baf9232d5411f82fc339353553\IbResourcesFilter
{
    public const array REQUIRED_FIELDS = [
        'resourceType',
    ];

    protected const array VALIDATION = [
        'resource' => [
            'minLength' => 1,
            'maxLength' => 255,
        ],
    ];

    protected const string ADDITIONAL_PROPERTIES_TYPE = 'mixed';
    protected const bool ADDITIONAL_PROPERTIES_NULLABLE = false;

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

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'resource' => is_string($value) ? $this->resource = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
