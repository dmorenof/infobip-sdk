<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N53932f53b54839fd583eae39fe878805e79c364296f164379eb97a5f2c4b6c59;

/**
 * ConfirmLineTemplatePayload
 */
final class ConfirmLineTemplatePayload extends \InfobipSDK\DTOs\N53932f53b54839fd583eae39fe878805e79c364296f164379eb97a5f2c4b6c59\LineTemplatePayload
{
    public const array REQUIRED_FIELDS = [
        'type',
    ];

    protected const array VALIDATION = [
        'actions' => [
            'minItems' => 2,
            'maxItems' => 2,
        ],
        'text' => [
            'minLength' => 0,
            'maxLength' => 240,
        ],
    ];

    protected const string ADDITIONAL_PROPERTIES_TYPE = 'mixed';
    protected const bool ADDITIONAL_PROPERTIES_NULLABLE = false;

    /**
     * Exactly two action buttons for the confirmation (for example Yes and No).
     */
    public \InfobipSDK\Collections\N53932f53b54839fd583eae39fe878805e79c364296f164379eb97a5f2c4b6c59\ButtonsLineTemplatePayload\ActionsCollection $actions {
        set {
            $this->assigning('actions', $value);
            $this->actions = $value;
        }
    }
    /**
     * Confirmation message text.
     * Example: "Are you sure?"
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
            'text' => is_string($value) ? $this->text = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
