<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N6a8bbdacebad88e7e0de8bdfd30e29e04d114b9f00175a0482b9e26b742d85d5;

/**
 * TemplateParameter
 *
 * Template parameters for dynamic content.
 */
final class TemplateParameter extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'name',
        'sampleValue',
        'type',
    ];

    protected const array VALIDATION = [
        'name' => [
            'minLength' => 1,
            'maxLength' => 20,
            'pattern' => '^[A-Za-z0-9_-]+$',
        ],
        'sampleValue' => [
            'minLength' => 1,
            'maxLength' => 200,
        ],
    ];

    /**
     * Name of the parameter. Only letters, digits, hyphen and underscore are allowed.
     */
    public string $name {
        set {
            $this->assigning('name', $value);
            $this->name = $value;
        }
    }
    /**
     * Sample data for the parameter.
     */
    public string $sampleValue {
        set {
            $this->assigning('sampleValue', $value);
            $this->sampleValue = $value;
        }
    }
    public \InfobipSDK\Enums\N6a8bbdacebad88e7e0de8bdfd30e29e04d114b9f00175a0482b9e26b742d85d5\TemplateParameterType $type;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'name' => is_string($value) ? $this->name = $value : parent::assignMember($name, $value),
            'sampleValue' => is_string($value) ? $this->sampleValue = $value : parent::assignMember($name, $value),
            'type' => is_string($value) ? $this->type = \InfobipSDK\Enums\N6a8bbdacebad88e7e0de8bdfd30e29e04d114b9f00175a0482b9e26b742d85d5\TemplateParameterType::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
