<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N13d6cf838c63455fe28fcf6ab1b4447c03d816f87ce89525d3cd759ca08a7b1a\AnsweringMachineDetection;

/**
 * Array of actions to execute when a machine is detected, or when the end of the message is reached if `endOfMessageDetectionTimeout` is set. Actions defined in `onDetecting` are interrupted before these actions begin. If you do not intend to continue the scenario after `onMachineDetected`, include a `Hangup` action at the end of this section to terminate the call.
 */
final class MachineDetectedDTO extends \Dmorenof\SdkRuntime\DTO
{
}
