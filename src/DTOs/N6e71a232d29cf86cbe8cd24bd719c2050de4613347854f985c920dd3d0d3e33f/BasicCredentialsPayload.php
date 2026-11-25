<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f;

/**
 * BasicCredentials
 *
 * Basic credentials.
 */
final class BasicCredentialsPayload extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'password',
        'username',
    ];

    protected const array VALIDATION = [
        'password' => [
            'minLength' => 1,
            'maxLength' => 255,
        ],
        'username' => [
            'minLength' => 1,
            'maxLength' => 255,
        ],
    ];

    /**
     * Password.
     */
    public string $password {
        set {
            $this->assigning('password', $value);
            $this->password = $value;
        }
    }
    /**
     * Username.
     */
    public string $username {
        set {
            $this->assigning('username', $value);
            $this->username = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'password' => is_string($value) ? $this->password = $value : parent::assignMember($name, $value),
            'username' => is_string($value) ? $this->username = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
