<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611;

/**
 * TranscriptionResult
 */
final class TranscriptionResult extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Format: double
     */
    public float $confidence;
    /**
     * Format: date-time
     */
    public string $endTime;
    /**
     * Format: date-time
     */
    public string $startTime;
    public string $text;
    public \InfobipSDK\Enums\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\ResultType $type;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'confidence' => is_float($value) ? $this->confidence = $value : parent::assignMember($name, $value),
            'endTime' => is_string($value) ? $this->endTime = $value : parent::assignMember($name, $value),
            'startTime' => is_string($value) ? $this->startTime = $value : parent::assignMember($name, $value),
            'text' => is_string($value) ? $this->text = $value : parent::assignMember($name, $value),
            'type' => is_string($value) ? $this->type = \InfobipSDK\Enums\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\ResultType::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
