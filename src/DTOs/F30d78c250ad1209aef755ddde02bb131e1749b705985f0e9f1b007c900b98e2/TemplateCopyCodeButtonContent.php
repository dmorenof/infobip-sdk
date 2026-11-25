<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\F30d78c250ad1209aef755ddde02bb131e1749b705985f0e9f1b007c900b98e2;

/**
 * TemplateCopyCodeButtonContent
 */
final class TemplateCopyCodeButtonContent extends \InfobipSDK\DTOs\F30d78c250ad1209aef755ddde02bb131e1749b705985f0e9f1b007c900b98e2\TemplateButtonContent
{
    public const array REQUIRED_FIELDS = [
        'type',
    ];

    protected const array VALIDATION = [
        'parameter' => [
            'minLength' => 1,
            'maxLength' => 20,
            'pattern' => '^[a-z0-9A-Z]*$',
        ],
    ];

    /**
     * Code.
     */
    public string $parameter {
        set {
            $this->assigning('parameter', $value);
            $this->parameter = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'parameter' => is_string($value) ? $this->parameter = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
