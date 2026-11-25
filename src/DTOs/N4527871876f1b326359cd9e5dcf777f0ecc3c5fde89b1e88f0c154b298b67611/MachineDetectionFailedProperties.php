<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611;

/**
 * MachineDetectionFailedProperties
 *
 * Properties of the machine detection failed event.
 */
final class MachineDetectionFailedProperties extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Custom data.
     */
    public \InfobipSDK\DTOs\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\MachineDetectionFailedProperties\CustomDataMap $customData;
    /**
     * Reason behind the machine detection failure.
     */
    public string $reason;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'reason' => is_string($value) ? $this->reason = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
