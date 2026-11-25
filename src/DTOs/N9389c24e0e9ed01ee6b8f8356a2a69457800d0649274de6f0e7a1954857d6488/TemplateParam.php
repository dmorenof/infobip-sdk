<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N9389c24e0e9ed01ee6b8f8356a2a69457800d0649274de6f0e7a1954857d6488;

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
    public \InfobipSDK\Enums\N9389c24e0e9ed01ee6b8f8356a2a69457800d0649274de6f0e7a1954857d6488\TemplateParamType $type;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'example' => is_string($value) ? $this->example = $value : parent::assignMember($name, $value),
            'name' => is_string($value) ? $this->name = $value : parent::assignMember($name, $value),
            'type' => is_string($value) ? $this->type = \InfobipSDK\Enums\N9389c24e0e9ed01ee6b8f8356a2a69457800d0649274de6f0e7a1954857d6488\TemplateParamType::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
