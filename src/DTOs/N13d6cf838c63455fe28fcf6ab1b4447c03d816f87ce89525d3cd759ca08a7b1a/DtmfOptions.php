<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N13d6cf838c63455fe28fcf6ab1b4447c03d816f87ce89525d3cd759ca08a7b1a;

/**
 * DtmfOptions
 */
final class DtmfOptions extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
    'maxInputLength' => [
        'minimum' => 1,
        'maximum' => 64,
        'format' => 'int32',
    ],
];

    /**
     * Map of expected collected DTMF values with some real meaning. (Example: if you have multilingual IVR, and option for users to press 1 to enter "English" menu, you can define {"1":"English"}, so the reporting and analysis will be easier). When this option is defined additional variable is present in the scenario. If you set your capture action variable name to myVar, then you will get additional variable myVar_Meaning containing the mapped value for a collected DTMF. Keys can contain only digits and asterisks.
     */
    public \InfobipSDK\DTOs\N13d6cf838c63455fe28fcf6ab1b4447c03d816f87ce89525d3cd759ca08a7b1a\DtmfOptions\MappedValuesMap $mappedValues;
    /**
     * Maximum acceptable number of digits. Capturing is stopped after this number of digits has been entered. If not set, maximum value will be used.
     * Format: int32
     */
    public int $maxInputLength {
        set {
            $this->assigning('maxInputLength', $value);
            $this->maxInputLength = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'maxInputLength' => is_int($value) ? $this->maxInputLength = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
