<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N8a19359d3a412667abbd2d38733e247b91417d2a845ae41758328736ea0ecce9;

/**
 * BiometricVector
 */
final class BiometricVector extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Biometric vector associated with the end user. Used when Infobip didn't store the vector in enrolment phase.
     * Example: [-0.09652680158615112,0.07107646763324738,-0.029479391872882843,-0.006973235867917538]
     */
    public \InfobipSDK\Collections\FloatCollection $vector;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'vector' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_float($item)) ? $this->vector = new \InfobipSDK\Collections\FloatCollection($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
