<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N14dcd0f25fe0ff2584924b9f91668496573ab31a7e8cac75f9f81e79874514cb;

/**
 * ViberBotSenderDisplayInfo
 *
 * Information about the sender
 */
final class ViberBotSenderDisplayInfo extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'name' => [
            'minLength' => 0,
            'maxLength' => 28,
        ],
    ];

    /**
     * The sender’s avatar URL
     */
    public string $avatarUrl;
    /**
     * The sender’s name to display
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
