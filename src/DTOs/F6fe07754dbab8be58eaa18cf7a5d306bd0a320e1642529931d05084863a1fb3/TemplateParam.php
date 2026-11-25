<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\F6fe07754dbab8be58eaa18cf7a5d306bd0a320e1642529931d05084863a1fb3;

/**
 * TemplateParam
 *
 * Variable parameter definition for template placeholders.
 */
final class TemplateParam extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'example',
        'name',
        'type',
    ];

    protected const array VALIDATION = [
        'example' => [
            'minLength' => 0,
            'maxLength' => 125,
        ],
        'name' => [
            'minLength' => 0,
            'maxLength' => 50,
        ],
    ];

    /**
     * Example value for the parameter, used for template preview and validation.
     * Example: "ORD-12345"
     */
    public string $example {
        set {
            $this->assigning('example', $value);
            $this->example = $value;
        }
    }
    /**
     * Name or identifier of the parameter, used to reference it in the template. Must have the same name as the placeholder in the template content.
     * Example: "orderId"
     */
    public string $name {
        set {
            $this->assigning('name', $value);
            $this->name = $value;
        }
    }
    public \InfobipSDK\Enums\F6fe07754dbab8be58eaa18cf7a5d306bd0a320e1642529931d05084863a1fb3\TemplateParamType $type;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'example' => is_string($value) ? $this->example = $value : parent::assignMember($name, $value),
            'name' => is_string($value) ? $this->name = $value : parent::assignMember($name, $value),
            'type' => is_string($value) ? $this->type = \InfobipSDK\Enums\F6fe07754dbab8be58eaa18cf7a5d306bd0a320e1642529931d05084863a1fb3\TemplateParamType::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
