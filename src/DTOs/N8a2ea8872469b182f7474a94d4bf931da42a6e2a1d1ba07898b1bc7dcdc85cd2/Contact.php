<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N8a2ea8872469b182f7474a94d4bf931da42a6e2a1d1ba07898b1bc7dcdc85cd2;

/**
 * Contact
 *
 * Contact information. Exists in case of WhatsApp Message.
 */
final class Contact extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Contact name.
     */
    public string $name;
    /**
     * Parent user ID.
     */
    public string $parentUserId;
    /**
     * Sender's phone number.
     */
    public string $phoneNumber;
    /**
     * User ID.
     */
    public string $userId;
    /**
     * Username.
     */
    public string $username;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'name' => is_string($value) ? $this->name = $value : parent::assignMember($name, $value),
            'parentUserId' => is_string($value) ? $this->parentUserId = $value : parent::assignMember($name, $value),
            'phoneNumber' => is_string($value) ? $this->phoneNumber = $value : parent::assignMember($name, $value),
            'userId' => is_string($value) ? $this->userId = $value : parent::assignMember($name, $value),
            'username' => is_string($value) ? $this->username = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
