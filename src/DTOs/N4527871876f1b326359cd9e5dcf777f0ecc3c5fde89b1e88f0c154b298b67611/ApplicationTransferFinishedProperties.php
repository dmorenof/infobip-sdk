<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611;

/**
 * ApplicationTransferFinishedProperties
 */
final class ApplicationTransferFinishedProperties extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'call',
        'destinationApplicationId',
        'sourceApplicationId',
        'transferId',
    ];

    protected const array VALIDATION = [
        'locationId' => [
            'format' => 'int32',
        ],
    ];

    public \InfobipSDK\DTOs\N431fb79b0e816230968e14ba1e1c6fadb75cfde9cb3c381f4217b2777f48153f\Call $call;
    public string $destinationApplicationId;
    public string $destinationCallsConfigurationId;
    /**
     * Format: int32
     */
    public int $locationId {
        set {
            $this->assigning('locationId', $value);
            $this->locationId = $value;
        }
    }
    public string $sourceApplicationId;
    public string $sourceCallsConfigurationId;
    public string $transferId;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'call' => $value instanceof \stdClass ? $this->call = new \InfobipSDK\DTOs\N431fb79b0e816230968e14ba1e1c6fadb75cfde9cb3c381f4217b2777f48153f\Call($value) : parent::assignMember($name, $value),
            'destinationApplicationId' => is_string($value) ? $this->destinationApplicationId = $value : parent::assignMember($name, $value),
            'destinationCallsConfigurationId' => is_string($value) ? $this->destinationCallsConfigurationId = $value : parent::assignMember($name, $value),
            'locationId' => is_int($value) ? $this->locationId = $value : parent::assignMember($name, $value),
            'sourceApplicationId' => is_string($value) ? $this->sourceApplicationId = $value : parent::assignMember($name, $value),
            'sourceCallsConfigurationId' => is_string($value) ? $this->sourceCallsConfigurationId = $value : parent::assignMember($name, $value),
            'transferId' => is_string($value) ? $this->transferId = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
