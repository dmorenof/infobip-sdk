<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N13d6cf838c63455fe28fcf6ab1b4447c03d816f87ce89525d3cd759ca08a7b1a;

/**
 * AnsweringMachineDetectionOptions
 */
final class AnsweringMachineDetectionOptions extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
    'endOfMessageDetectionTimeout' => [
        'minimum' => 1,
        'maximum' => 60,
        'format' => 'int32',
    ],
];

    /**
     * Specifies the timeout (in seconds) to wait for the end of the message after a machine is detected. If set, actions defined in `onMachineDetected` will be executed only after the end of the message is detected or the timeout is reached. If not set, `onMachineDetected` actions will be triggered immediately after machine detection. If the timeout is reached before the end of the message, actions defined in `onTimeout` will be executed instead.
     * Format: int32
     */
    public int $endOfMessageDetectionTimeout {
        set {
            $this->assigning('endOfMessageDetectionTimeout', $value);
            $this->endOfMessageDetectionTimeout = $value;
        }
    }
    public \InfobipSDK\Enums\N13d6cf838c63455fe28fcf6ab1b4447c03d816f87ce89525d3cd759ca08a7b1a\WaitForEom $waitEndOfMessageDetection;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'endOfMessageDetectionTimeout' => is_int($value) ? $this->endOfMessageDetectionTimeout = $value : parent::assignMember($name, $value),
            'waitEndOfMessageDetection' => is_string($value) ? $this->waitEndOfMessageDetection = \InfobipSDK\Enums\N13d6cf838c63455fe28fcf6ab1b4447c03d816f87ce89525d3cd759ca08a7b1a\WaitForEom::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
