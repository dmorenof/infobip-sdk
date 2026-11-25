<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N287f18f04e9f129a7bc94ed3ae48e2480e2673b8fdf041ab5125fde9674634b8;

/**
 * MachineDetection
 *
 * Machine detection configuration for the dial.
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
     * Detection time in seconds
     * Format: double
     */
    public float $detectionTime {
        set {
            $this->assigning('detectionTime', $value);
            $this->detectionTime = $value;
        }
    }
    public \InfobipSDK\DTOs\N287f18f04e9f129a7bc94ed3ae48e2480e2673b8fdf041ab5125fde9674634b8\MessageDetection $messageDetection;
    public \InfobipSDK\DTOs\N287f18f04e9f129a7bc94ed3ae48e2480e2673b8fdf041ab5125fde9674634b8\MachineDetectionMode $mode;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'detectionTime' => is_float($value) ? $this->detectionTime = $value : parent::assignMember($name, $value),
            'messageDetection' => $value instanceof \stdClass ? $this->messageDetection = new \InfobipSDK\DTOs\N287f18f04e9f129a7bc94ed3ae48e2480e2673b8fdf041ab5125fde9674634b8\MessageDetection($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
