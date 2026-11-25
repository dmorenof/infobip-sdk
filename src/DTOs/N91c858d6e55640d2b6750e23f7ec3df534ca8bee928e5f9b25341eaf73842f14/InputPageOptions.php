<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N91c858d6e55640d2b6750e23f7ec3df534ca8bee928e5f9b25341eaf73842f14;

/**
 * InputPageOptions
 *
 * Options of the page.
 */
final class InputPageOptions extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
    'labelText' => [
        'minLength' => 0,
        'maxLength' => 200,
    ],
    'maximumCharacterCount' => [
        'minimum' => 0,
        'format' => 'int32',
    ],
    'placeholder' => [
        'minLength' => 0,
        'maxLength' => 200,
    ],
    'prefixText' => [
        'minLength' => 0,
        'maxLength' => 200,
    ],
];

    public \InfobipSDK\Enums\N91c858d6e55640d2b6750e23f7ec3df534ca8bee928e5f9b25341eaf73842f14\TextContentType $appleTextContentType;
    public \InfobipSDK\Enums\N91c858d6e55640d2b6750e23f7ec3df534ca8bee928e5f9b25341eaf73842f14\InputType $inputType;
    public \InfobipSDK\Enums\N91c858d6e55640d2b6750e23f7ec3df534ca8bee928e5f9b25341eaf73842f14\KeyboardType $keyboardType;
    /**
     * Text label shown to identify the input field. Only applies to inputType: SINGLELINE.
     */
    public string $labelText {
        set {
            $this->assigning('labelText', $value);
            $this->labelText = $value;
        }
    }
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
    public string $placeholder {
        set {
            $this->assigning('placeholder', $value);
            $this->placeholder = $value;
        }
    }
    /**
     * String value representing optional text shown next to the text field. Only applies to inputType: SINGLELINE.
     */
    public string $prefixText {
        set {
            $this->assigning('prefixText', $value);
            $this->prefixText = $value;
        }
    }
    /**
     * String representing a JSON encoded regular expression (regex) string to limit the type of input for input field to use.
     */
    public string $regex;
    /**
     * When set to true, the next button on page is disabled until the user provides input
     */
    public bool $required;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'appleTextContentType' => is_string($value) ? $this->appleTextContentType = \InfobipSDK\Enums\N91c858d6e55640d2b6750e23f7ec3df534ca8bee928e5f9b25341eaf73842f14\TextContentType::from($value) : parent::assignMember($name, $value),
            'inputType' => is_string($value) ? $this->inputType = \InfobipSDK\Enums\N91c858d6e55640d2b6750e23f7ec3df534ca8bee928e5f9b25341eaf73842f14\InputType::from($value) : parent::assignMember($name, $value),
            'keyboardType' => is_string($value) ? $this->keyboardType = \InfobipSDK\Enums\N91c858d6e55640d2b6750e23f7ec3df534ca8bee928e5f9b25341eaf73842f14\KeyboardType::from($value) : parent::assignMember($name, $value),
            'labelText' => is_string($value) ? $this->labelText = $value : parent::assignMember($name, $value),
            'maximumCharacterCount' => is_int($value) ? $this->maximumCharacterCount = $value : parent::assignMember($name, $value),
            'placeholder' => is_string($value) ? $this->placeholder = $value : parent::assignMember($name, $value),
            'prefixText' => is_string($value) ? $this->prefixText = $value : parent::assignMember($name, $value),
            'regex' => is_string($value) ? $this->regex = $value : parent::assignMember($name, $value),
            'required' => is_bool($value) ? $this->required = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
