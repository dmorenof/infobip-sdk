<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N2188fec7c48e989bb7053521bdef9d76d71def96483c5304f01cd7e0878f8f14;

/**
 * ApplicationDestination
 */
final class ApplicationDestination extends \InfobipSDK\DTOs\N2188fec7c48e989bb7053521bdef9d76d71def96483c5304f01cd7e0878f8f14\Destination
{
    public const array REQUIRED_FIELDS = [];

    protected const array VALIDATION = [
    'callsConfigurationId' => [
        'minLength' => 1,
        'pattern' => '^[\\p{L}\\p{N}\\-_+=/.]{1,100}$',
    ],
];

    /**
     * Call Configuration ID.
     */
    public string $callsConfigurationId {
        set {
            $this->assigning('callsConfigurationId', $value);
            $this->callsConfigurationId = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'callsConfigurationId' => is_string($value) ? $this->callsConfigurationId = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
