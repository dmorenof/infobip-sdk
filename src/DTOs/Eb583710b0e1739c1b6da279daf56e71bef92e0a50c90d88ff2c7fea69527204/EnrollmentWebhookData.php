<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\Eb583710b0e1739c1b6da279daf56e71bef92e0a50c90d88ff2c7fea69527204;

/**
 * EnrollmentWebhookData
 *
 * Result data object.
 */
final class EnrollmentWebhookData extends \Dmorenof\SdkRuntime\DTO
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

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'biometricReference' => is_string($value) ? $this->biometricReference = $value : parent::assignMember($name, $value),
            'biometricVector' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_float($item)) ? $this->biometricVector = new \InfobipSDK\Collections\FloatCollection($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
