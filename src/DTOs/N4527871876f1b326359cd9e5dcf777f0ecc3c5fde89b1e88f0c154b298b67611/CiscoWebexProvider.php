<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611;

/**
 * CiscoWebexProvider
 */
final class CiscoWebexProvider extends \InfobipSDK\DTOs\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\PegasusProvider
{
    public const array REQUIRED_FIELDS = [];

    protected const string ADDITIONAL_PROPERTIES_TYPE = 'mixed';
    protected const bool ADDITIONAL_PROPERTIES_NULLABLE = false;

    /**
     * Cisco organization ID.
     */
    public string $ciscoUUID;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'ciscoUUID' => is_string($value) ? $this->ciscoUUID = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
