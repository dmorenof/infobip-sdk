<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\F30d78c250ad1209aef755ddde02bb131e1749b705985f0e9f1b007c900b98e2;

/**
 * TemplateNamedBodyParameter
 *
 * Template's named parameter values. Must contain at least one entry.
 */
final class TemplateNamedBodyParameter extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'parameterName',
        'text',
    ];

    protected const array VALIDATION = [
        'parameterName' => [
            'minLength' => 1,
        ],
        'text' => [
            'minLength' => 1,
        ],
    ];

    /**
     * Name of the parameter as defined in the template.
     */
    public string $parameterName {
        set {
            $this->assigning('parameterName', $value);
            $this->parameterName = $value;
        }
    }
    /**
     * Text value of the parameter.
     */
    public string $text {
        set {
            $this->assigning('text', $value);
            $this->text = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'parameterName' => is_string($value) ? $this->parameterName = $value : parent::assignMember($name, $value),
            'text' => is_string($value) ? $this->text = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
