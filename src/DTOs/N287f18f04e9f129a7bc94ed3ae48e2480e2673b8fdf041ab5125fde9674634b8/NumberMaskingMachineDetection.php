<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N287f18f04e9f129a7bc94ed3ae48e2480e2673b8fdf041ab5125fde9674634b8;

/**
 * NumberMaskingMachineDetection
 *
 * Answering machine detection configuration of a Number Masking call. Detection will be performed only on the callee side of the call.
 */
final class NumberMaskingMachineDetection extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Duration of machine detection. Higher values will increase the accuracy of machine detection, but will also increase the time it takes to detect a machine.
     * Format: double
     */
    public float $detectionTime;
    /**
     * Indicates whether machine detection is enabled from the callee perspective.
     */
    public bool $enabled;
    public \InfobipSDK\Enums\N287f18f04e9f129a7bc94ed3ae48e2480e2673b8fdf041ab5125fde9674634b8\ExecutionMode $executionMode;
    /**
     * Indicates whether the callee side will hangup upon machine detection.
     */
    public bool $hangupOnMachineDetection;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'detectionTime' => is_float($value) ? $this->detectionTime = $value : parent::assignMember($name, $value),
            'enabled' => is_bool($value) ? $this->enabled = $value : parent::assignMember($name, $value),
            'executionMode' => is_string($value) ? $this->executionMode = \InfobipSDK\Enums\N287f18f04e9f129a7bc94ed3ae48e2480e2673b8fdf041ab5125fde9674634b8\ExecutionMode::from($value) : parent::assignMember($name, $value),
            'hangupOnMachineDetection' => is_bool($value) ? $this->hangupOnMachineDetection = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
