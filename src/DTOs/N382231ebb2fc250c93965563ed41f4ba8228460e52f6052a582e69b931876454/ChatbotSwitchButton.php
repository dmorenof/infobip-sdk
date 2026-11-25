<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N382231ebb2fc250c93965563ed41f4ba8228460e52f6052a582e69b931876454;

/**
 * ChatbotSwitchButton
 *
 * Button that switches the conversation to a chatbot.
 */
final class ChatbotSwitchButton extends \InfobipSDK\DTOs\N382231ebb2fc250c93965563ed41f4ba8228460e52f6052a582e69b931876454\Button
{
    public const array REQUIRED_FIELDS = [];

    protected const array VALIDATION = [
    'chatEvent' => [
        'minLength' => 0,
        'maxLength' => 50,
    ],
    'chatExtra' => [
        'minLength' => 0,
        'maxLength' => 50,
    ],
    'name' => [
        'minLength' => 0,
        'maxLength' => 28,
    ],
];

    protected const string ADDITIONAL_PROPERTIES_TYPE = 'mixed';
    protected const bool ADDITIONAL_PROPERTIES_NULLABLE = false;

    /**
     * Chatbot event name to trigger.
     */
    public string $chatEvent {
        set {
            $this->assigning('chatEvent', $value);
            $this->chatEvent = $value;
        }
    }
    /**
     * Additional metadata passed to the chatbot.
     */
    public string $chatExtra {
        set {
            $this->assigning('chatExtra', $value);
            $this->chatExtra = $value;
        }
    }
    /**
     * Button label displayed to the user.
     */
    public string $name {
        set {
            $this->assigning('name', $value);
            $this->name = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'chatEvent' => is_string($value) ? $this->chatEvent = $value : parent::assignMember($name, $value),
            'chatExtra' => is_string($value) ? $this->chatExtra = $value : parent::assignMember($name, $value),
            'name' => is_string($value) ? $this->name = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
