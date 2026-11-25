<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N899caf445aab842b03fe1d74e4afd7097f0161dae66538ffa05bba2f153d708f;

/**
 * MessagesApiMessageFormPage
 *
 * An array of different pages to be shown in the form. If INTRO page is included it will always appear first.
 */
class MessagesApiMessageFormPage extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'type',
];

    public const string DISCRIMINATOR_BASE = self::class;
    public const string DISCRIMINATOR_PROPERTY = 'type';
    public const array DISCRIMINATOR_MAPPING = [
    '899caf445aab842b03fe1d74e4afd7097f0161dae66538ffa05bba2f153d708f.MessagesApiMessageDatePickerFormPage' => 'InfobipSDK\\DTOs\\N899caf445aab842b03fe1d74e4afd7097f0161dae66538ffa05bba2f153d708f\\MessagesApiMessageDatePickerFormPage',
    '899caf445aab842b03fe1d74e4afd7097f0161dae66538ffa05bba2f153d708f.MessagesApiMessageInputFormPage' => 'InfobipSDK\\DTOs\\N899caf445aab842b03fe1d74e4afd7097f0161dae66538ffa05bba2f153d708f\\MessagesApiMessageInputFormPage',
    '899caf445aab842b03fe1d74e4afd7097f0161dae66538ffa05bba2f153d708f.MessagesApiMessageIntroFormPage' => 'InfobipSDK\\DTOs\\N899caf445aab842b03fe1d74e4afd7097f0161dae66538ffa05bba2f153d708f\\MessagesApiMessageIntroFormPage',
    '899caf445aab842b03fe1d74e4afd7097f0161dae66538ffa05bba2f153d708f.MessagesApiMessagePickerFormPage' => 'InfobipSDK\\DTOs\\N899caf445aab842b03fe1d74e4afd7097f0161dae66538ffa05bba2f153d708f\\MessagesApiMessagePickerFormPage',
    '899caf445aab842b03fe1d74e4afd7097f0161dae66538ffa05bba2f153d708f.MessagesApiMessageSelectFormPage' => 'InfobipSDK\\DTOs\\N899caf445aab842b03fe1d74e4afd7097f0161dae66538ffa05bba2f153d708f\\MessagesApiMessageSelectFormPage',
    'DATE_PICKER' => 'InfobipSDK\\DTOs\\N899caf445aab842b03fe1d74e4afd7097f0161dae66538ffa05bba2f153d708f\\MessagesApiMessageDatePickerFormPage',
    'INPUT' => 'InfobipSDK\\DTOs\\N899caf445aab842b03fe1d74e4afd7097f0161dae66538ffa05bba2f153d708f\\MessagesApiMessageInputFormPage',
    'INTRO' => 'InfobipSDK\\DTOs\\N899caf445aab842b03fe1d74e4afd7097f0161dae66538ffa05bba2f153d708f\\MessagesApiMessageIntroFormPage',
    'PICKER' => 'InfobipSDK\\DTOs\\N899caf445aab842b03fe1d74e4afd7097f0161dae66538ffa05bba2f153d708f\\MessagesApiMessagePickerFormPage',
    'SELECT' => 'InfobipSDK\\DTOs\\N899caf445aab842b03fe1d74e4afd7097f0161dae66538ffa05bba2f153d708f\\MessagesApiMessageSelectFormPage',
];

    protected const string ADDITIONAL_PROPERTIES_TYPE = 'mixed';
    protected const bool ADDITIONAL_PROPERTIES_NULLABLE = false;

    public \InfobipSDK\Enums\N899caf445aab842b03fe1d74e4afd7097f0161dae66538ffa05bba2f153d708f\MessagesApiMessageFormPageType $type;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'type' => is_string($value) ? $this->type = \InfobipSDK\Enums\N899caf445aab842b03fe1d74e4afd7097f0161dae66538ffa05bba2f153d708f\MessagesApiMessageFormPageType::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
