<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N899caf445aab842b03fe1d74e4afd7097f0161dae66538ffa05bba2f153d708f;

/**
 * MessagesApiMessageSenderDisplayInfo
 *
 * Sender display info (name and avatar). Used only for Viber Bot messages.
 */
final class MessagesApiMessageSenderDisplayInfo extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'avatarUrl' => [
            'pattern' => '',
        ],
        'name' => [
            'minLength' => 0,
            'maxLength' => 28,
        ],
    ];

    /**
     * The sender's avatar URL.
     */
    public string $avatarUrl {
        set {
            $this->assigning('avatarUrl', $value);
            $this->avatarUrl = $value;
        }
    }
    /**
     * The sender's name to display.
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
            'avatarUrl' => is_string($value) ? $this->avatarUrl = $value : parent::assignMember($name, $value),
            'name' => is_string($value) ? $this->name = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
