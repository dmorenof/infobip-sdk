<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611;

/**
 * GenesysCloudProvider
 */
final class GenesysCloudProvider extends \InfobipSDK\DTOs\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\PegasusProvider
{
    public const array REQUIRED_FIELDS = [];

    protected const array READ_ONLY_FIELDS = [
        'inboundTerminationIdentifier',
        'outboundTerminationFQDN',
    ];

    protected const string ADDITIONAL_PROPERTIES_TYPE = 'mixed';
    protected const bool ADDITIONAL_PROPERTIES_NULLABLE = false;

    /**
     * Inbound termination identifier.
     */
    public string $inboundTerminationIdentifier;
    /**
     * Outbound termination FQDN.
     */
    public string $outboundTerminationFQDN;
    public \InfobipSDK\Enums\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\GenesysCloudRegion $region;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'inboundTerminationIdentifier' => is_string($value) ? $this->inboundTerminationIdentifier = $value : parent::assignMember($name, $value),
            'outboundTerminationFQDN' => is_string($value) ? $this->outboundTerminationFQDN = $value : parent::assignMember($name, $value),
            'region' => is_string($value) ? $this->region = \InfobipSDK\Enums\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\GenesysCloudRegion::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
