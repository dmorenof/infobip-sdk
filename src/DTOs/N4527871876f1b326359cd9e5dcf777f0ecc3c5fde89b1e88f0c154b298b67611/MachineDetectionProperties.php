<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611;

/**
 * MachineDetectionProperties
 *
 * Properties of the events that provide Answering Machine Detection result.
 */
final class MachineDetectionProperties extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * A map representing the confidence rating for each detection class. The key is a tag indicating the detection class, and the value is a float between `0.0` and `1.0` representing the confidence rating. Possible classes are: `HUMAN`, `MACHINE`, `MUSIC`, `RINGING`, `NOISE`, `SILENCE` and `OTHER`. Each class confidence rating is independent from the other, thereby the sum of all confidence values may not equal 1.0.
     * Example: {"HUMAN":0.95,"MACHINE":0,"MUSIC":0,"RINGING":0,"NOISE":0.05,"SILENCE":0.01,"OTHER":0.02}
     */
    public \InfobipSDK\DTOs\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\MachineDetectionProperties\ConfidenceRatingMap $confidenceRating;
    /**
     * Custom data.
     */
    public \InfobipSDK\DTOs\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\MachineDetectionProperties\CustomDataMap $customData;
    public \InfobipSDK\Enums\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\DetectionResult $detectionResult;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'detectionResult' => is_string($value) ? $this->detectionResult = \InfobipSDK\Enums\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\DetectionResult::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
