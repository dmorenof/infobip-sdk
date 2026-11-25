<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N267b6ecf9b18ace076c5287f2f55ab493690ff43a19cc6531a331c0c908f8fd5;

/**
 * PostbackAction
 */
final class PostbackAction extends \InfobipSDK\DTOs\N267b6ecf9b18ace076c5287f2f55ab493690ff43a19cc6531a331c0c908f8fd5\Action
{
    public const array REQUIRED_FIELDS = [];

    protected const array VALIDATION = [
        'data' => [
            'minLength' => 0,
            'maxLength' => 1000,
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
     * String returned in the postback data property of the webhook event when the action is performed.
     */
    public string $data {
        set {
            $this->assigning('data', $value);
            $this->data = $value;
        }
    }
    /**
     * Text displayed in the chat as a message from the user when the action is performed.
     */
    public string $displayText {
        set {
            $this->assigning('displayText', $value);
            $this->displayText = $value;
        }
    }
    /**
     * Label displayed on the action.
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
