<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\Bb8af9c2d2d4d677e25555100e31662e23d86ede8b5d73bbf4974b4decdd08d7;

/**
 * CreateSessionRequest
 */
final class CreateSessionRequest extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'password',
        'username',
    ];

    /**
     * Password of the user.
     */
    public string $password;
    /**
     * Create session which is not bound to IP.
     */
    public bool $unsafe;
    /**
     * Username of the user.
     */
    public string $username;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'password' => is_string($value) ? $this->password = $value : parent::assignMember($name, $value),
            'unsafe' => is_bool($value) ? $this->unsafe = $value : parent::assignMember($name, $value),
            'username' => is_string($value) ? $this->username = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
