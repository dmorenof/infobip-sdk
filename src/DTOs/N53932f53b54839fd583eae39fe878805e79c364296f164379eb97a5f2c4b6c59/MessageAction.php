<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N53932f53b54839fd583eae39fe878805e79c364296f164379eb97a5f2c4b6c59;

/**
 * MessageAction
 */
final class MessageAction extends \InfobipSDK\DTOs\N53932f53b54839fd583eae39fe878805e79c364296f164379eb97a5f2c4b6c59\Action
{
    public const array REQUIRED_FIELDS = [
    'type',
];

    protected const array VALIDATION = [
    'label' => [
        'minLength' => 0,
        'maxLength' => 20,
    ],
    'text' => [
        'minLength' => 0,
        'maxLength' => 300,
    ],
];

    protected const string ADDITIONAL_PROPERTIES_TYPE = 'mixed';
    protected const bool ADDITIONAL_PROPERTIES_NULLABLE = false;

    /**
     * Label for the action button.
     * Example: "Yes"
     */
    public string $label {
        set {
            $this->assigning('label', $value);
            $this->label = $value;
        }
    }
    /**
     * Text sent when the action is tapped.
     * Example: "Yes"
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
            'label' => is_string($value) ? $this->label = $value : parent::assignMember($name, $value),
            'text' => is_string($value) ? $this->text = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
