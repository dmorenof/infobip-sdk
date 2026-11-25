<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\Eb583710b0e1739c1b6da279daf56e71bef92e0a50c90d88ff2c7fea69527204;

/**
 * VerificationWebhookData
 *
 * Result data object.
 */
final class VerificationWebhookData extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Confidence score between face images from a document and a selfie. Possible values are numbers between `0.00` and `100.00`. The closer the number is to `100.00`, the more likely it is that the images match.
     * Example: 83
     * Format: float
     */
    public float $faceConfidenceScore;
    /**
     * Distance between face images from a document and a selfie. Possible values are numbers between `0.00` and `1.00`. The closer the number is to `0.00`, the more likely it is that the images match.
     * Example: 0.232
     * Format: float
     */
    public float $faceDistance;
    /**
     * The result of comparing face images between a document and a selfie. `True`, if distance between images is less than configured threshold, which means that the faces most likely match. `False` means that the faces most likely do not match.
     * Example: true
     */
    public bool $faceMatch;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'faceConfidenceScore' => is_float($value) ? $this->faceConfidenceScore = $value : parent::assignMember($name, $value),
            'faceDistance' => is_float($value) ? $this->faceDistance = $value : parent::assignMember($name, $value),
            'faceMatch' => is_bool($value) ? $this->faceMatch = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
