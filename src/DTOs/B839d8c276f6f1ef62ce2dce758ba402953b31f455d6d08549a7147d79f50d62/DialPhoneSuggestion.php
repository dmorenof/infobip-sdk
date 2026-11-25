<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\B839d8c276f6f1ef62ce2dce758ba402953b31f455d6d08549a7147d79f50d62;

/**
 * DialPhoneSuggestion
 *
 * Opens the user's default dialer app with the agent-specified phone number filled in.
 */
final class DialPhoneSuggestion extends \InfobipSDK\DTOs\B839d8c276f6f1ef62ce2dce758ba402953b31f455d6d08549a7147d79f50d62\Suggestion
{
    public const array REQUIRED_FIELDS = [
    'type',
];

    protected const array VALIDATION = [
    'phoneNumber' => [
        'pattern' => '^\\+?[0-9]\\d{1,14}$',
    ],
    'postbackData' => [
        'minLength' => 1,
        'maxLength' => 2024,
    ],
    'text' => [
        'minLength' => 1,
        'maxLength' => 25,
    ],
];

    protected const string ADDITIONAL_PROPERTIES_TYPE = 'mixed';
    protected const bool ADDITIONAL_PROPERTIES_NULLABLE = false;

    /**
     * Valid phone number.
     * Example: "385977666618"
     */
    public string $phoneNumber {
        set {
            $this->assigning('phoneNumber', $value);
            $this->phoneNumber = $value;
        }
    }
    /**
     * Value which is going to be sent as a reply to a suggestion.
     * Example: "REPLY"
     */
    public string $postbackData {
        set {
            $this->assigning('postbackData', $value);
            $this->postbackData = $value;
        }
    }
    /**
     * Suggestion text.
     * Example: "Pick one!"
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
            'phoneNumber' => is_string($value) ? $this->phoneNumber = $value : parent::assignMember($name, $value),
            'postbackData' => is_string($value) ? $this->postbackData = $value : parent::assignMember($name, $value),
            'text' => is_string($value) ? $this->text = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
