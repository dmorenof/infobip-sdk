<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N082acced121042a63992bde26d4dd141353f7b2633c33f797139d71d4bef2a93;

/**
 * FormElementOptionDto
 */
final class FormElementOptionDto extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'name',
    'value',
];

    public \InfobipSDK\DTOs\N082acced121042a63992bde26d4dd141353f7b2633c33f797139d71d4bef2a93\FormElementOptionDto\AdditionalConfigurationMap $additionalConfiguration;
    public string $name;
    public string $value;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'name' => is_string($value) ? $this->name = $value : parent::assignMember($name, $value),
            'value' => is_string($value) ? $this->value = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
