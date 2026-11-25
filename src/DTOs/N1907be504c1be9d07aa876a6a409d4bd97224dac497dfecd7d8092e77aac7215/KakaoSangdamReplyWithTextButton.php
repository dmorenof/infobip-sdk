<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N1907be504c1be9d07aa876a6a409d4bd97224dac497dfecd7d8092e77aac7215;

/**
 * KakaoSangdamReplyWithTextButton
 *
 * Button that sends a text message from the user when tapped. Unlike REPLY, the button name text appears as a user-sent chat message visible in the conversation.
 */
final class KakaoSangdamReplyWithTextButton extends \InfobipSDK\DTOs\N1907be504c1be9d07aa876a6a409d4bd97224dac497dfecd7d8092e77aac7215\KakaoSangdamButton
{
    public const array REQUIRED_FIELDS = [];

    protected const array VALIDATION = [
    'extra' => [
        'minLength' => 0,
        'maxLength' => 100,
    ],
    'name' => [
        'minLength' => 0,
        'maxLength' => 28,
    ],
];

    protected const string ADDITIONAL_PROPERTIES_TYPE = 'mixed';
    protected const bool ADDITIONAL_PROPERTIES_NULLABLE = false;

    /**
     * Additional metadata passed with the reply event.
     */
    public string $extra {
        set {
            $this->assigning('extra', $value);
            $this->extra = $value;
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
            'extra' => is_string($value) ? $this->extra = $value : parent::assignMember($name, $value),
            'name' => is_string($value) ? $this->name = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
