<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N09ef6171198229ad9a73a413d2271afa3ba31b9abbd6cd8a0cc9563fd721f1ed;

/**
 * UserData
 *
 * User who uploaded the file.
 */
final class UserData extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'encryptUserId',
        'firstName',
        'lastName',
    ];

    /**
     * Unique encrypted identifier of the user.
     * Example: "a1b2c3d4e5f6"
     */
    public string $encryptUserId;
    /**
     * First name of the user.
     * Example: "John"
     */
    public string $firstName;
    /**
     * Last name of the user.
     * Example: "Doe"
     */
    public string $lastName;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'encryptUserId' => is_string($value) ? $this->encryptUserId = $value : parent::assignMember($name, $value),
            'firstName' => is_string($value) ? $this->firstName = $value : parent::assignMember($name, $value),
            'lastName' => is_string($value) ? $this->lastName = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
