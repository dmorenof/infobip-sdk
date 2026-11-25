<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N53932f53b54839fd583eae39fe878805e79c364296f164379eb97a5f2c4b6c59;

/**
 * PostbackAction
 */
final class PostbackAction extends \InfobipSDK\DTOs\N53932f53b54839fd583eae39fe878805e79c364296f164379eb97a5f2c4b6c59\Action
{
    public const array REQUIRED_FIELDS = [
    'type',
];

    protected const array VALIDATION = [
    'data' => [
        'minLength' => 0,
        'maxLength' => 300,
    ],
    'displayText' => [
        'minLength' => 0,
        'maxLength' => 300,
    ],
    'label' => [
        'minLength' => 0,
        'maxLength' => 20,
    ],
];

    protected const string ADDITIONAL_PROPERTIES_TYPE = 'mixed';
    protected const bool ADDITIONAL_PROPERTIES_NULLABLE = false;

    /**
     * String returned in the postback webhook event.
     * Example: "action=buy&itemid=123"
     */
    public string $data {
        set {
            $this->assigning('data', $value);
            $this->data = $value;
        }
    }
    /**
     * Text displayed in the chat as a message from the user.
     * Example: "Buy item 123"
     */
    public string $displayText {
        set {
            $this->assigning('displayText', $value);
            $this->displayText = $value;
        }
    }
    /**
     * Label for the action button.
     * Example: "Buy"
     */
    public string $label {
        set {
            $this->assigning('label', $value);
            $this->label = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'data' => is_string($value) ? $this->data = $value : parent::assignMember($name, $value),
            'displayText' => is_string($value) ? $this->displayText = $value : parent::assignMember($name, $value),
            'label' => is_string($value) ? $this->label = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
