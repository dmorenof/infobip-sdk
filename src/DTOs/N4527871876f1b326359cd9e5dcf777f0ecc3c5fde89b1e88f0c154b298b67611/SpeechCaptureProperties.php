<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611;

/**
 * SpeechCaptureProperties
 */
final class SpeechCaptureProperties extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Format: double
     */
    public float $confidence;
    public string $fullText;
    public string $matchedKeyPhrase;
    public \InfobipSDK\Enums\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\TerminationReason $terminationReason;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'confidence' => is_float($value) ? $this->confidence = $value : parent::assignMember($name, $value),
            'fullText' => is_string($value) ? $this->fullText = $value : parent::assignMember($name, $value),
            'matchedKeyPhrase' => is_string($value) ? $this->matchedKeyPhrase = $value : parent::assignMember($name, $value),
            'terminationReason' => is_string($value) ? $this->terminationReason = \InfobipSDK\Enums\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\TerminationReason::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
