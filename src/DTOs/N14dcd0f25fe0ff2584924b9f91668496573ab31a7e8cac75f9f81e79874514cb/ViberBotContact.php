<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N14dcd0f25fe0ff2584924b9f91668496573ab31a7e8cac75f9f81e79874514cb;

/**
 * ViberBotContact
 */
final class ViberBotContact extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Avatar URL
     */
    public string $avatar;
    /**
     * Contact’s username
     */
    public string $name;
    /**
     * Contact’s phone number
     */
    public string $phoneNumber;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'avatar' => is_string($value) ? $this->avatar = $value : parent::assignMember($name, $value),
            'name' => is_string($value) ? $this->name = $value : parent::assignMember($name, $value),
            'phoneNumber' => is_string($value) ? $this->phoneNumber = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
