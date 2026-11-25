<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N899caf445aab842b03fe1d74e4afd7097f0161dae66538ffa05bba2f153d708f;

/**
 * MessagesApiMessageInputFormPageOptions
 *
 * Options of the page.
 */
final class MessagesApiMessageInputFormPageOptions extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'maximumCharacterCount' => [
            'minimum' => 0,
            'format' => 'int32',
        ],
    ];

    /**
     * Text to give the user more input context that displays below the Input field.
     */
    public string $hintText;
    public \InfobipSDK\Enums\N899caf445aab842b03fe1d74e4afd7097f0161dae66538ffa05bba2f153d708f\MessagesApiMessageInputFormInputType $inputType;
    /**
     * When set to true, the next button on page is disabled until the user provides input.
     */
    public bool $isRequired;
    public \InfobipSDK\Enums\N899caf445aab842b03fe1d74e4afd7097f0161dae66538ffa05bba2f153d708f\MessagesApiMessageInputFormPageKeyboard $keyboardType;
    /**
     * Text label shown to identify the input field. Applicable only for SINGLELINE input type.
     */
    public string $labelText;
    /**
     * Maximum field size in characters.
     * Format: int32
     */
    public int $maximumCharacterCount {
        set {
            $this->assigning('maximumCharacterCount', $value);
            $this->maximumCharacterCount = $value;
        }
    }
    /**
     * Text string used when there is no other text in the input text field.
     */
    public string $placeholder;
    /**
     * String value representing optional text shown next to the text field. Applicable only for SINGLELINE input type.
     */
    public string $prefixText;
    /**
     * String representing a JSON encoded regular expression (regex) string to limit the type of input for input field to use.
     */
    public string $regex;
    public \InfobipSDK\Enums\N899caf445aab842b03fe1d74e4afd7097f0161dae66538ffa05bba2f153d708f\MessagesApiMessageInputFormPageTextContentType $textContentType;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'hintText' => is_string($value) ? $this->hintText = $value : parent::assignMember($name, $value),
            'inputType' => is_string($value) ? $this->inputType = \InfobipSDK\Enums\N899caf445aab842b03fe1d74e4afd7097f0161dae66538ffa05bba2f153d708f\MessagesApiMessageInputFormInputType::from($value) : parent::assignMember($name, $value),
            'isRequired' => is_bool($value) ? $this->isRequired = $value : parent::assignMember($name, $value),
            'keyboardType' => is_string($value) ? $this->keyboardType = \InfobipSDK\Enums\N899caf445aab842b03fe1d74e4afd7097f0161dae66538ffa05bba2f153d708f\MessagesApiMessageInputFormPageKeyboard::from($value) : parent::assignMember($name, $value),
            'labelText' => is_string($value) ? $this->labelText = $value : parent::assignMember($name, $value),
            'maximumCharacterCount' => is_int($value) ? $this->maximumCharacterCount = $value : parent::assignMember($name, $value),
            'placeholder' => is_string($value) ? $this->placeholder = $value : parent::assignMember($name, $value),
            'prefixText' => is_string($value) ? $this->prefixText = $value : parent::assignMember($name, $value),
            'regex' => is_string($value) ? $this->regex = $value : parent::assignMember($name, $value),
            'textContentType' => is_string($value) ? $this->textContentType = \InfobipSDK\Enums\N899caf445aab842b03fe1d74e4afd7097f0161dae66538ffa05bba2f153d708f\MessagesApiMessageInputFormPageTextContentType::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
