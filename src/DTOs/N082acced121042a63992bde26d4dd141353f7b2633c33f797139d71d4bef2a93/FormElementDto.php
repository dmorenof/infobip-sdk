<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N082acced121042a63992bde26d4dd141353f7b2633c33f797139d71d4bef2a93;

/**
 * FormElementDto
 *
 * List of form fields
 */
final class FormElementDto extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'component',
    ];

    public \InfobipSDK\DTOs\N082acced121042a63992bde26d4dd141353f7b2633c33f797139d71d4bef2a93\FormElementDto\AdditionalConfigurationMap $additionalConfiguration;
    public string $checkboxText;
    public \InfobipSDK\Enums\N082acced121042a63992bde26d4dd141353f7b2633c33f797139d71d4bef2a93\ComponentType $component;
    public string $fieldId;
    public bool $isHidden;
    public bool $isRequired;
    public string $label;
    public \InfobipSDK\Collections\N082acced121042a63992bde26d4dd141353f7b2633c33f797139d71d4bef2a93\FormElementDto\OptionsCollection $options;
    public string $personField;
    public string $placeholder;
    public string $textContent;
    public \InfobipSDK\DTOs\N082acced121042a63992bde26d4dd141353f7b2633c33f797139d71d4bef2a93\FormElementDto\ValidationMessagesMap $validationMessages;
    public \InfobipSDK\DTOs\N082acced121042a63992bde26d4dd141353f7b2633c33f797139d71d4bef2a93\ValidationRules $validationRules;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'checkboxText' => is_string($value) ? $this->checkboxText = $value : parent::assignMember($name, $value),
            'component' => is_string($value) ? $this->component = \InfobipSDK\Enums\N082acced121042a63992bde26d4dd141353f7b2633c33f797139d71d4bef2a93\ComponentType::from($value) : parent::assignMember($name, $value),
            'fieldId' => is_string($value) ? $this->fieldId = $value : parent::assignMember($name, $value),
            'isHidden' => is_bool($value) ? $this->isHidden = $value : parent::assignMember($name, $value),
            'isRequired' => is_bool($value) ? $this->isRequired = $value : parent::assignMember($name, $value),
            'label' => is_string($value) ? $this->label = $value : parent::assignMember($name, $value),
            'options' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->options = new \InfobipSDK\Collections\N082acced121042a63992bde26d4dd141353f7b2633c33f797139d71d4bef2a93\FormElementDto\OptionsCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \InfobipSDK\DTOs\N082acced121042a63992bde26d4dd141353f7b2633c33f797139d71d4bef2a93\FormElementOptionDto::class)) : parent::assignMember($name, $value),
            'personField' => is_string($value) ? $this->personField = $value : parent::assignMember($name, $value),
            'placeholder' => is_string($value) ? $this->placeholder = $value : parent::assignMember($name, $value),
            'textContent' => is_string($value) ? $this->textContent = $value : parent::assignMember($name, $value),
            'validationRules' => $value instanceof \stdClass ? $this->validationRules = new \InfobipSDK\DTOs\N082acced121042a63992bde26d4dd141353f7b2633c33f797139d71d4bef2a93\ValidationRules($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
