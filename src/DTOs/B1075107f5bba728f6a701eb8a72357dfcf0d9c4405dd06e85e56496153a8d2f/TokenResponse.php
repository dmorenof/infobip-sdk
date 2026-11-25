<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\B1075107f5bba728f6a701eb8a72357dfcf0d9c4405dd06e85e56496153a8d2f;

/**
 * TokenResponse
 *
 * Successful response that indicates OAuth2 token was created.
 */
final class TokenResponse extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'expires_in' => [
            'format' => 'int32',
        ],
    ];

    /**
     * OAuth2 token.
     */
    public string $access_token;
    /**
     * OAuth2 token expiration in seconds.
     * Format: int32
     */
    public int $expires_in {
        set {
            $this->assigning('expires_in', $value);
            $this->expires_in = $value;
        }
    }
    /**
     * OAuth2 token type.
     */
    public string $token_type;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'access_token' => is_string($value) ? $this->access_token = $value : parent::assignMember($name, $value),
            'expires_in' => is_int($value) ? $this->expires_in = $value : parent::assignMember($name, $value),
            'token_type' => is_string($value) ? $this->token_type = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
