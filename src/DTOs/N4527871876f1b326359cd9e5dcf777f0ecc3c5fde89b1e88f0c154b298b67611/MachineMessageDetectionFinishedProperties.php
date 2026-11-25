<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611;

/**
 * MachineMessageDetectionFinishedProperties
 *
 * Properties of the machine message detection finished event.
 */
final class MachineMessageDetectionFinishedProperties extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Custom data.
     */
    public \InfobipSDK\DTOs\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\MachineMessageDetectionFinishedProperties\CustomDataMap $customData;
    public \InfobipSDK\Enums\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\MachineMessageDetectionResult $detectionResult;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'detectionResult' => is_string($value) ? $this->detectionResult = \InfobipSDK\Enums\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\MachineMessageDetectionResult::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
