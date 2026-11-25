<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611;

/**
 * MachineDetectionRequest
 */
final class MachineDetectionRequest extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'enabled',
];

    protected const array VALIDATION = [
    'detectionTime' => [
        'minimum' => 1,
        'maximum' => 5,
    ],
    'messageDetectionTimeout' => [
        'maximum' => 60,
        'format' => 'int32',
    ],
];

    /**
     * Indicates time in seconds during which answering machine detection will analyse the call before making a decision. Shorter detection time may come at the expense of accuracy. Must be lower than `messageDetectionTimeout` if `messageDetectionTimeout` is specified.
     * Format: double
     */
    public float $detectionTime {
        set {
            $this->assigning('detectionTime', $value);
            $this->detectionTime = $value;
        }
    }
    /**
     * Indicates whether to enable answering machine detection. If set to true, answering machine detection will generate an event indicating if the call was answered by a human or a machine.
     */
    public bool $enabled;
    /**
     * Indicates maximum duration for detecting the end of the message when a answering machine is detected. If set to 0, no end of message detection will be done. Expressed in seconds.
     * Format: int32
     */
    public int $messageDetectionTimeout {
        set {
            $this->assigning('messageDetectionTimeout', $value);
            $this->messageDetectionTimeout = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'detectionTime' => is_float($value) ? $this->detectionTime = $value : parent::assignMember($name, $value),
            'enabled' => is_bool($value) ? $this->enabled = $value : parent::assignMember($name, $value),
            'messageDetectionTimeout' => is_int($value) ? $this->messageDetectionTimeout = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
