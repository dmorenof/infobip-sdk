<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\F30d78c250ad1209aef755ddde02bb131e1749b705985f0e9f1b007c900b98e2;

/**
 * TemplateTextHeaderContent
 */
final class TemplateTextHeaderContent extends \InfobipSDK\DTOs\F30d78c250ad1209aef755ddde02bb131e1749b705985f0e9f1b007c900b98e2\TemplateHeaderContent
{
    public const array REQUIRED_FIELDS = [
    'type',
];

    protected const array VALIDATION = [
    'placeholder' => [
        'minLength' => 1,
    ],
];

    protected const string ADDITIONAL_PROPERTIES_TYPE = 'mixed';
    protected const bool ADDITIONAL_PROPERTIES_NULLABLE = false;

    /**
     * Value of a placeholder in the text header.
     */
    public string $placeholder {
        set {
            $this->assigning('placeholder', $value);
            $this->placeholder = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'placeholder' => is_string($value) ? $this->placeholder = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
