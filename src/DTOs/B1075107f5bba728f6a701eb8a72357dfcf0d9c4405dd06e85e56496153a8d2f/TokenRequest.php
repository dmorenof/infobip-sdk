<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\B1075107f5bba728f6a701eb8a72357dfcf0d9c4405dd06e85e56496153a8d2f;

/**
 * TokenRequest
 *
 * Request used for creating OAuth2 token.
 */
final class TokenRequest extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'client_id',
    'client_secret',
    'grant_type',
];

    /**
     * The username created when signing up with Infobip.
     */
    public string $client_id;
    /**
     * The password created when signing up with Infobip.
     */
    public string $client_secret;
    /**
     * Authorization code received from the authorization server. This parameter is required only if the `grant_type` is set to `authorization_code`.
     */
    public string $code;
    /**
     * Grant type as defined by the OAuth framework.
     */
    public \InfobipSDK\Enums\B1075107f5bba728f6a701eb8a72357dfcf0d9c4405dd06e85e56496153a8d2f\GrantType $grant_type;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'client_id' => is_string($value) ? $this->client_id = $value : parent::assignMember($name, $value),
            'client_secret' => is_string($value) ? $this->client_secret = $value : parent::assignMember($name, $value),
            'code' => is_string($value) ? $this->code = $value : parent::assignMember($name, $value),
            'grant_type' => is_string($value) ? $this->grant_type = \InfobipSDK\Enums\B1075107f5bba728f6a701eb8a72357dfcf0d9c4405dd06e85e56496153a8d2f\GrantType::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
