<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N2188fec7c48e989bb7053521bdef9d76d71def96483c5304f01cd7e0878f8f14;

/**
 * MachineDetection
 *
 * Machine detection settings for phone calls.
 */
final class MachineDetection extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'detectionTime' => [
            'minimum' => 1,
            'maximum' => 5,
        ],
    ];

    /**
     * Maximum time in seconds to wait for machine detection. Only applicable when machineDetection is enabled.
     * Format: double
     */
    public float $detectionTime {
        set {
            $this->assigning('detectionTime', $value);
            $this->detectionTime = $value;
        }
    }
    /**
     * Enable machine detection for phone calls. When enabled, the system will attempt to detect if the call is answered by a voicemail or answering machine.
     */
    public bool $enabled;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'detectionTime' => is_float($value) ? $this->detectionTime = $value : parent::assignMember($name, $value),
            'enabled' => is_bool($value) ? $this->enabled = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
