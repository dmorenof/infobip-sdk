<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\E204fb2d0d1568cbfe90b245006e95aab18e580484154f085b8348d2e991bc11;

/**
 * KakaoAlimChatbotSwitchButton
 */
final class KakaoAlimChatbotSwitchButton extends \InfobipSDK\DTOs\E204fb2d0d1568cbfe90b245006e95aab18e580484154f085b8348d2e991bc11\KakaoAlimButton
{
    public const array REQUIRED_FIELDS = [
        'buttonText',
    ];

    protected const array VALIDATION = [
        'buttonText' => [
            'minLength' => 1,
            'maxLength' => 28,
        ],
        'chatEvent' => [
            'minLength' => 0,
            'maxLength' => 50,
        ],
        'chatExtra' => [
            'minLength' => 0,
            'maxLength' => 50,
        ],
    ];

    protected const array WRITE_ONLY_FIELDS = [
        'buttonText',
        'chatEvent',
        'chatExtra',
    ];

    protected const string ADDITIONAL_PROPERTIES_TYPE = 'mixed';
    protected const bool ADDITIONAL_PROPERTIES_NULLABLE = false;

    /**
     * Chat bot event name to connect when switching chat bots. Max 50 characters.
     */
    public string $chatEvent {
        set {
            $this->assigning('chatEvent', $value);
            $this->chatEvent = $value;
        }
    }
    /**
     * Meta information passed when switching chat bots. Max 50 characters.
     */
    public string $chatExtra {
        set {
            $this->assigning('chatExtra', $value);
            $this->chatExtra = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'chatEvent' => is_string($value) ? $this->chatEvent = $value : parent::assignMember($name, $value),
            'chatExtra' => is_string($value) ? $this->chatExtra = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
