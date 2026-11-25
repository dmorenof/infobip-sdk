<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611;

/**
 * ApplicationTransferFailedProperties
 */
final class ApplicationTransferFailedProperties extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'destinationApplicationId',
    'sourceApplicationId',
    'transferId',
];

    public string $destinationApplicationId;
    public string $destinationCallsConfigurationId;
    public string $sourceApplicationId;
    public string $sourceCallsConfigurationId;
    public string $transferId;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'destinationApplicationId' => is_string($value) ? $this->destinationApplicationId = $value : parent::assignMember($name, $value),
            'destinationCallsConfigurationId' => is_string($value) ? $this->destinationCallsConfigurationId = $value : parent::assignMember($name, $value),
            'sourceApplicationId' => is_string($value) ? $this->sourceApplicationId = $value : parent::assignMember($name, $value),
            'sourceCallsConfigurationId' => is_string($value) ? $this->sourceCallsConfigurationId = $value : parent::assignMember($name, $value),
            'transferId' => is_string($value) ? $this->transferId = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
