<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N13d6cf838c63455fe28fcf6ab1b4447c03d816f87ce89525d3cd759ca08a7b1a;

/**
 * CollectOptions
 */
final class CollectOptions extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'maxInputLength' => [
            'minimum' => 1,
            'maximum' => 64,
            'format' => 'int32',
        ],
        'timeout' => [
            'maximum' => 30,
            'format' => 'int32',
        ],
    ];

    /**
     * Map of expected collected DTMF values with some real meaning. (Example: if you have multilingual IVR, and option for users to press 1 to enter "English" menu, you can define {"1":"English"}, so the reporting and analysis will be easier). When this option is defined additional variable is present in the scenario. If you set your collect action variable name to myVar, then you will get additional variable myVar_Meaning containing the mapped value for a collected DTMF. Mapped values can contain only numbers and multiple asterisk (*) symbols.
     */
    public \InfobipSDK\DTOs\N13d6cf838c63455fe28fcf6ab1b4447c03d816f87ce89525d3cd759ca08a7b1a\CollectOptions\MappedValuesMap $mappedValues;
    /**
     * Maximum acceptable number of digits. Stops reading after maxdigits have been entered (without requiring the user to press '#' key).
     * Format: int32
     */
    public int $maxInputLength {
        set {
            $this->assigning('maxInputLength', $value);
            $this->maxInputLength = $value;
        }
    }
    public \InfobipSDK\Enums\N13d6cf838c63455fe28fcf6ab1b4447c03d816f87ce89525d3cd759ca08a7b1a\SendToReports $sendToReports;
    /**
     * Timeout in seconds for user to press both first DTMF and all other inter-digit DTMFs. Default value is 5. Max value is 30. The parameter can be constructed using variables.
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
            'maxInputLength' => is_int($value) ? $this->maxInputLength = $value : parent::assignMember($name, $value),
            'sendToReports' => is_string($value) ? $this->sendToReports = \InfobipSDK\Enums\N13d6cf838c63455fe28fcf6ab1b4447c03d816f87ce89525d3cd759ca08a7b1a\SendToReports::from($value) : parent::assignMember($name, $value),
            'timeout' => is_int($value) ? $this->timeout = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
