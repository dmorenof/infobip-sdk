<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N7c77a2c703ce12a601f120565936de62cf48d1baf9232d5411f82fc339353553;

/**
 * AlphaResourceFilter
 *
 * Alphanumeric filter for resources.
 */
final class AlphaResourceFilter extends \InfobipSDK\DTOs\N7c77a2c703ce12a601f120565936de62cf48d1baf9232d5411f82fc339353553\IbResourcesFilter
{
    public const array REQUIRED_FIELDS = [
    'resourceType',
];

    protected const array VALIDATION = [
    'countryCode' => [
        'pattern' => '^[A-Z]{2}$',
    ],
    'senderName' => [
        'minLength' => 1,
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
     * Alphanumeric sender name.
     * Example: "MySender"
     */
    public string $senderName {
        set {
            $this->assigning('senderName', $value);
            $this->senderName = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'countryCode' => is_string($value) ? $this->countryCode = $value : parent::assignMember($name, $value),
            'senderName' => is_string($value) ? $this->senderName = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
