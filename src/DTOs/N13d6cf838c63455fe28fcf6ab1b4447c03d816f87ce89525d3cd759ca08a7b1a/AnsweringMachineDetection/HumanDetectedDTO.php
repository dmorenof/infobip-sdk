<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N13d6cf838c63455fe28fcf6ab1b4447c03d816f87ce89525d3cd759ca08a7b1a\AnsweringMachineDetection;

/**
 * Array of actions to execute when a human is detected. Actions defined in `onDetecting` are interrupted before these actions begin. To avoid this interruption, omit this section and define the remaining scenario after this action. If you do not intend to continue the scenario after `onHumanDetected`, include a `Hangup` action at the end of this section to terminate the call.
 */
final class HumanDetectedDTO extends \Dmorenof\SdkRuntime\DTO
{
}
