<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\Eb583710b0e1739c1b6da279daf56e71bef92e0a50c90d88ff2c7fea69527204;

/**
 * KycWebhookData
 *
 * Result data object.
 */
final class KycWebhookData extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * 36-character unique identifier of a biometric vector associated with the end user. Used, if Infobip needs to store the vector.
     * Example: "usr_eb1cfc67ead74fc29ff2c65c4cec2baf"
     */
    public string $biometricReference;
    /**
     * Biometric vector associated with the end user. Used, if Infobip does not store the vector.
     * Example: [-0.09652680158615112,0.07107646763324738,-0.029479391872882843,-0.006973235867917538]
     */
    public \InfobipSDK\Collections\FloatCollection $biometricVector;
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
    public \InfobipSDK\DTOs\Eb583710b0e1739c1b6da279daf56e71bef92e0a50c90d88ff2c7fea69527204\MrzWebhookData $mrzData;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'biometricReference' => is_string($value) ? $this->biometricReference = $value : parent::assignMember($name, $value),
            'biometricVector' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_float($item)) ? $this->biometricVector = new \InfobipSDK\Collections\FloatCollection($value) : parent::assignMember($name, $value),
            'faceConfidenceScore' => is_float($value) ? $this->faceConfidenceScore = $value : parent::assignMember($name, $value),
            'faceDistance' => is_float($value) ? $this->faceDistance = $value : parent::assignMember($name, $value),
            'faceMatch' => is_bool($value) ? $this->faceMatch = $value : parent::assignMember($name, $value),
            'mrzData' => $value instanceof \stdClass ? $this->mrzData = new \InfobipSDK\DTOs\Eb583710b0e1739c1b6da279daf56e71bef92e0a50c90d88ff2c7fea69527204\MrzWebhookData($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
