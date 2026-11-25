<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N287f18f04e9f129a7bc94ed3ae48e2480e2673b8fdf041ab5125fde9674634b8;

/**
 * SpeechData
 *
 * The data related to the speechCapture instruction.
 */
final class SpeechData extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Confidence of the capture result.
     * Format: double
     */
    public float $confidence;
    /**
     * Captured raw text.
     */
    public string $fullText;
    /**
     * Specific phrase matched during the capture.
     */
    public string $matchedKeyPhrase;
    public \InfobipSDK\Enums\N287f18f04e9f129a7bc94ed3ae48e2480e2673b8fdf041ab5125fde9674634b8\TerminationReason $terminationReason;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'confidence' => is_float($value) ? $this->confidence = $value : parent::assignMember($name, $value),
            'fullText' => is_string($value) ? $this->fullText = $value : parent::assignMember($name, $value),
            'matchedKeyPhrase' => is_string($value) ? $this->matchedKeyPhrase = $value : parent::assignMember($name, $value),
            'terminationReason' => is_string($value) ? $this->terminationReason = \InfobipSDK\Enums\N287f18f04e9f129a7bc94ed3ae48e2480e2673b8fdf041ab5125fde9674634b8\TerminationReason::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
