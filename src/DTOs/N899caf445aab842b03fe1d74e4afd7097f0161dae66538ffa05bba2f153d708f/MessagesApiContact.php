<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N899caf445aab842b03fe1d74e4afd7097f0161dae66538ffa05bba2f153d708f;

/**
 * MessagesApiContact
 *
 * Contact information of the end user.
 */
final class MessagesApiContact extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Contact's display name.
     */
    public string $name;
    /**
     * Parent user ID. For WhatsApp, this field is present for linked business portfolios.
     */
    public string $parentUserId;
    /**
     * Contact's phone number. For WhatsApp, it may be omitted after username launch if the user has adopted a username.
     */
    public string $phoneNumber;
    /**
     * User ID. For WhatsApp, this value is Business-Scoped User ID (BSUID) and is always present once available.
     */
    public string $userId;
    /**
     * Username. For WhatsApp, this field is present if the end user has adopted a Meta username.
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
