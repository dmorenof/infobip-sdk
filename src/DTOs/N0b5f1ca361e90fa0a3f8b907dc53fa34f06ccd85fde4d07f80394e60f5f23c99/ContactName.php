<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N0b5f1ca361e90fa0a3f8b907dc53fa34f06ccd85fde4d07f80394e60f5f23c99;

/**
 * Contact
 */
final class ContactName extends \Dmorenof\SdkRuntime\DTO
{
    protected const array WRITE_ONLY_FIELDS = [
        'name',
        'parentUserId',
        'phoneNumber',
        'userId',
        'username',
    ];

    /**
     * Contact name
     */
    public string $name;
    /**
     * parent user ID.
     */
    public string $parentUserId;
    /**
     * Sender's phone number.
     */
    public string $phoneNumber;
    /**
     * User ID
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
