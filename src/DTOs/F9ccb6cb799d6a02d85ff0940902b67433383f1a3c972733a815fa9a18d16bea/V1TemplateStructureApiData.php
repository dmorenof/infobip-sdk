<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\F9ccb6cb799d6a02d85ff0940902b67433383f1a3c972733a815fa9a18d16bea;

/**
 * V1TemplateStructureApiData
 *
 * Template structure.
 */
final class V1TemplateStructureApiData extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'body',
    ];

    protected const array VALIDATION = [
        'body' => [
            'minLength' => 1,
        ],
        'buttons' => [
            'minItems' => 1,
            'maxItems' => 3,
        ],
        'footer' => [
            'minLength' => 0,
            'maxLength' => 60,
        ],
    ];

    protected const array READ_ONLY_FIELDS = [
        'type',
    ];

    /**
     * Template body. Can be registered as plain text or text with placeholders. Placeholders have to be correctly formatted and in the correct order, regardless of other sections. Example: {{1}}, {{2}}, {{3}}...
     * Example: "body {{1}} content"
     */
    public string $body {
        set {
            $this->assigning('body', $value);
            $this->body = $value;
        }
    }
    /**
     * Template buttons. Can be either up to 3 `quick reply` buttons or up to 2 `call to action` buttons. Call to action buttons must be unique in type.
     */
    public \InfobipSDK\Collections\F9ccb6cb799d6a02d85ff0940902b67433383f1a3c972733a815fa9a18d16bea\V1TemplateStructureApiData\ButtonsCollection $buttons {
        set {
            $this->assigning('buttons', $value);
            $this->buttons = $value;
        }
    }
    /**
     * Template footer. Plain text, up to 60 characters.
     * Example: "footer"
     */
    public string $footer {
        set {
            $this->assigning('footer', $value);
            $this->footer = $value;
        }
    }
    public \InfobipSDK\DTOs\F9ccb6cb799d6a02d85ff0940902b67433383f1a3c972733a815fa9a18d16bea\V1HeaderApiData $header;
    public \InfobipSDK\Enums\F9ccb6cb799d6a02d85ff0940902b67433383f1a3c972733a815fa9a18d16bea\V1TemplateStructureApiData\TypeEnum $type;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'body' => is_string($value) ? $this->body = $value : parent::assignMember($name, $value),
            'footer' => is_string($value) ? $this->footer = $value : parent::assignMember($name, $value),
            'type' => is_string($value) ? $this->type = \InfobipSDK\Enums\F9ccb6cb799d6a02d85ff0940902b67433383f1a3c972733a815fa9a18d16bea\V1TemplateStructureApiData\TypeEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
