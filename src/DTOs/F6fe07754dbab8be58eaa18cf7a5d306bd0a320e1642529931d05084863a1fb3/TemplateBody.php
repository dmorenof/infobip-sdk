<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\F6fe07754dbab8be58eaa18cf7a5d306bd0a320e1642529931d05084863a1fb3;

/**
 * TemplateBody
 *
 * Template body containing the actual message text for a specific language.
 */
final class TemplateBody extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'language',
        'template',
    ];

    protected const array VALIDATION = [
        'template' => [
            'minLength' => 1,
            'maxLength' => 1000,
        ],
    ];

    public \InfobipSDK\Enums\F6fe07754dbab8be58eaa18cf7a5d306bd0a320e1642529931d05084863a1fb3\TemplateLang $language;
    /**
     * Template message text with optional placeholders for variables (e.g., {{1}}, {{2}}). Maximum 1000 characters. Last word in the template text cannot be a placeholder.
     * Example: "Your order {{orderId}} has been confirmed."
     */
    public string $template {
        set {
            $this->assigning('template', $value);
            $this->template = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'language' => is_string($value) ? $this->language = \InfobipSDK\Enums\F6fe07754dbab8be58eaa18cf7a5d306bd0a320e1642529931d05084863a1fb3\TemplateLang::from($value) : parent::assignMember($name, $value),
            'template' => is_string($value) ? $this->template = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
