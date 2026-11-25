<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N899caf445aab842b03fe1d74e4afd7097f0161dae66538ffa05bba2f153d708f;

/**
 * MessagesApiTemplateChatbotSwitchButton
 */
final class MessagesApiTemplateChatbotSwitchButton extends \InfobipSDK\DTOs\N899caf445aab842b03fe1d74e4afd7097f0161dae66538ffa05bba2f153d708f\MessagesApiTemplateButton
{
    public const array REQUIRED_FIELDS = [
    'type',
];

    protected const array VALIDATION = [
    'chatEvent' => [
        'minLength' => 0,
        'maxLength' => 50,
    ],
    'chatExtra' => [
        'minLength' => 0,
        'maxLength' => 50,
    ],
    'text' => [
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
     * Text to be displayed on the button.
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
            'chatEvent' => is_string($value) ? $this->chatEvent = $value : parent::assignMember($name, $value),
            'chatExtra' => is_string($value) ? $this->chatExtra = $value : parent::assignMember($name, $value),
            'text' => is_string($value) ? $this->text = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
