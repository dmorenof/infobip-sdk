<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N13d6cf838c63455fe28fcf6ab1b4447c03d816f87ce89525d3cd759ca08a7b1a;

/**
 * Machine Detection (Advanced)
 *
 * This action detects answering machines at the beginning of a call. It allows for detailed configuration of actions to be executed at various stages of the detection process.
 */
final class AnsweringMachineDetection extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'answeringMachineDetection',
        'onMachineDetected',
    ];

    /**
     * Indicates whether machine detection should be performed.
     */
    public bool $answeringMachineDetection;
    /**
     * Array of actions to execute while detection is in progress. A maximum of two actions of specific types (`Play`, `Say`, `Collect`) can be defined.
     */
    public \InfobipSDK\Collections\N13d6cf838c63455fe28fcf6ab1b4447c03d816f87ce89525d3cd759ca08a7b1a\AnsweringMachineDetection\OnDetectingCollection $onDetecting;
    /**
     * Array of actions to execute when a human is detected. Actions defined in `onDetecting` are interrupted before these actions begin. To avoid this interruption, omit this section and define the remaining scenario after this action. If you do not intend to continue the scenario after `onHumanDetected`, include a `Hangup` action at the end of this section to terminate the call.
     */
    public \InfobipSDK\Collections\N13d6cf838c63455fe28fcf6ab1b4447c03d816f87ce89525d3cd759ca08a7b1a\AnsweringMachineDetection\HumanDetectedCollection $onHumanDetected;
    /**
     * Array of actions to execute when a machine is detected, or when the end of the message is reached if `endOfMessageDetectionTimeout` is set. Actions defined in `onDetecting` are interrupted before these actions begin. If you do not intend to continue the scenario after `onMachineDetected`, include a `Hangup` action at the end of this section to terminate the call.
     */
    public \InfobipSDK\Collections\N13d6cf838c63455fe28fcf6ab1b4447c03d816f87ce89525d3cd759ca08a7b1a\AnsweringMachineDetection\MachineDetectedCollection $onMachineDetected;
    /**
     * Array of actions to execute when a machine is detected and the `endOfMessageDetectionTimeout` is reached. If you do not intend to continue the scenario after `onTimeout`, include a `Hangup` action at the end of this section to terminate the call.
     */
    public \InfobipSDK\Collections\N13d6cf838c63455fe28fcf6ab1b4447c03d816f87ce89525d3cd759ca08a7b1a\AnsweringMachineDetection\OnTimeoutCollection $onTimeout;
    public \InfobipSDK\DTOs\N13d6cf838c63455fe28fcf6ab1b4447c03d816f87ce89525d3cd759ca08a7b1a\AnsweringMachineDetectionOptions $options;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'answeringMachineDetection' => is_bool($value) ? $this->answeringMachineDetection = $value : parent::assignMember($name, $value),
            'options' => $value instanceof \stdClass ? $this->options = new \InfobipSDK\DTOs\N13d6cf838c63455fe28fcf6ab1b4447c03d816f87ce89525d3cd759ca08a7b1a\AnsweringMachineDetectionOptions($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
