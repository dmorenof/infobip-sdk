<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N1907be504c1be9d07aa876a6a409d4bd97224dac497dfecd7d8092e77aac7215;

/**
 * KakaoSangdamChatbotSwitchButton
 *
 * Button that switches the conversation to a chatbot. Use event to specify the chatbot event to trigger.
 */
final class KakaoSangdamChatbotSwitchButton extends \InfobipSDK\DTOs\N1907be504c1be9d07aa876a6a409d4bd97224dac497dfecd7d8092e77aac7215\KakaoSangdamButton
{
    public const array REQUIRED_FIELDS = [];

    protected const array VALIDATION = [
    'event' => [
        'minLength' => 0,
        'maxLength' => 100,
        'pattern' => '[A-Za-z0-9_]{1,100}',
    ],
    'name' => [
        'minLength' => 0,
        'maxLength' => 28,
    ],
];

    protected const string ADDITIONAL_PROPERTIES_TYPE = 'mixed';
    protected const bool ADDITIONAL_PROPERTIES_NULLABLE = false;

    /**
     * Chatbot event name to trigger. Must contain only alphanumeric characters and underscores.
     */
    public string $event {
        set {
            $this->assigning('event', $value);
            $this->event = $value;
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
            'event' => is_string($value) ? $this->event = $value : parent::assignMember($name, $value),
            'name' => is_string($value) ? $this->name = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
