<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N8a19359d3a412667abbd2d38733e247b91417d2a845ae41758328736ea0ecce9;

/**
 * BiometricReference
 */
final class BiometricReference extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * 36-character unique identifier of a biometric vector associated with the end user. Used, if Infobip needs to store the vector in enrolment phase and return reference in result.
     * Example: "usr_eb1cfc67ead74fc29ff2c65c4cec2baf"
     */
    public string $reference;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'reference' => is_string($value) ? $this->reference = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
