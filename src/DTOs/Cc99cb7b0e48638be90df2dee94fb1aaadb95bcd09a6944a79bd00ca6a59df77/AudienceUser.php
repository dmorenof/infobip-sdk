<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\Cc99cb7b0e48638be90df2dee94fb1aaadb95bcd09a6944a79bd00ca6a59df77;

/**
 * AudienceUser
 *
 * A user identified by a hashed phone number, a hashed email address, or both.
 */
final class AudienceUser extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
    'email' => [
        'minLength' => 64,
        'maxLength' => 64,
    ],
    'phone' => [
        'minLength' => 64,
        'maxLength' => 64,
    ],
];

    /**
     * SHA-256 hashed email address. Normalize the value before hashing: trim surrounding whitespace and lowercase it (e.g. " User&#64;Example.com " becomes "user&#64;example.com" before hashing). The hashed value must be a 64-character lowercase hexadecimal string.
     * Example: "b4c9a289323b21a01c3e940f150eb9b8c542587f1abfd8f0e1cc1ffc5e475514"
     */
    public string $email {
        set {
            $this->assigning('email', $value);
            $this->email = $value;
        }
    }
    /**
     * SHA-256 hashed phone number. Normalize the value before hashing: remove symbols, letters, and any leading zeroes, keeping only the country code and digits (e.g. "(+84) 091-2345678" becomes "84912345678" before hashing). The hashed value must be a 64-character lowercase hexadecimal string.
     * Example: "d6736136ea896c1bfdc553e0e86e702c70d060d805696ca3e4e9e0961353860a"
     */
    public string $phone {
        set {
            $this->assigning('phone', $value);
            $this->phone = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'email' => is_string($value) ? $this->email = $value : parent::assignMember($name, $value),
            'phone' => is_string($value) ? $this->phone = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
