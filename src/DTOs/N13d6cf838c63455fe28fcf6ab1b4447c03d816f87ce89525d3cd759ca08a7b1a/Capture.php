<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N13d6cf838c63455fe28fcf6ab1b4447c03d816f87ce89525d3cd759ca08a7b1a;

/**
 * Capture
 *
 * Capture action performs speech recognition of a specified duration. The recognized text can be used in other actions of the scenario. Speech capture will start after the beep tone.
 */
final class Capture extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'capture',
        'speechOptions',
        'timeout',
    ];

    protected const array VALIDATION = [
        'actionId' => [
            'format' => 'int32',
        ],
        'timeout' => [
            'minimum' => 1,
            'maximum' => 30,
            'format' => 'int32',
        ],
    ];

    /**
     * User-defined ID of an action that can be used with go-to action.
     * Format: int32
     */
    public int $actionId {
        set {
            $this->assigning('actionId', $value);
            $this->actionId = $value;
        }
    }
    /**
     * Flag indicating whether a beep sound should play at the start of capture.
     */
    public bool $beep;
    /**
     * Variable name. If speech recognition matches one of the specified keyPhrases, a variable with this name will be set to match the keyphrase. Otherwise, this variable will be an empty string. Together with this variable, an implicit variable that contains the full text of the captured speech will be created. The name of this variable is constructed by adding _Full suffix to the variable name.
     */
    public string $capture;
    public \InfobipSDK\DTOs\N13d6cf838c63455fe28fcf6ab1b4447c03d816f87ce89525d3cd759ca08a7b1a\DtmfOptions $dtmfOptions;
    public \InfobipSDK\Enums\N13d6cf838c63455fe28fcf6ab1b4447c03d816f87ce89525d3cd759ca08a7b1a\SendToReports $sendToReports;
    public \InfobipSDK\DTOs\N13d6cf838c63455fe28fcf6ab1b4447c03d816f87ce89525d3cd759ca08a7b1a\SpeechOptions $speechOptions;
    /**
     * Number of seconds used for capturing speech or digits failover. Minimum value is 1 and maximum value is 30. Can be overriden with speechOptions.maxSilence.
     * Format: int32
     */
    public int $timeout {
        set {
            $this->assigning('timeout', $value);
            $this->timeout = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'actionId' => is_int($value) ? $this->actionId = $value : parent::assignMember($name, $value),
            'beep' => is_bool($value) ? $this->beep = $value : parent::assignMember($name, $value),
            'capture' => is_string($value) ? $this->capture = $value : parent::assignMember($name, $value),
            'dtmfOptions' => $value instanceof \stdClass ? $this->dtmfOptions = new \InfobipSDK\DTOs\N13d6cf838c63455fe28fcf6ab1b4447c03d816f87ce89525d3cd759ca08a7b1a\DtmfOptions($value) : parent::assignMember($name, $value),
            'sendToReports' => is_string($value) ? $this->sendToReports = \InfobipSDK\Enums\N13d6cf838c63455fe28fcf6ab1b4447c03d816f87ce89525d3cd759ca08a7b1a\SendToReports::from($value) : parent::assignMember($name, $value),
            'speechOptions' => $value instanceof \stdClass ? $this->speechOptions = new \InfobipSDK\DTOs\N13d6cf838c63455fe28fcf6ab1b4447c03d816f87ce89525d3cd759ca08a7b1a\SpeechOptions($value) : parent::assignMember($name, $value),
            'timeout' => is_int($value) ? $this->timeout = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
