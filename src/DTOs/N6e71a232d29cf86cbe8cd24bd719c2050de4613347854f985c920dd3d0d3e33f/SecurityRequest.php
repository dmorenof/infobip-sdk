<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f;

/**
 * Security
 *
 * Security settings object holding the authentication settings necessary to access your webhook. Should only be provided if you are creating a new profile and settings; otherwise it will be ignored.
 */
final class SecurityRequest extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'authId',
    ];

    protected const array VALIDATION = [
        'authId' => [
            'minLength' => 1,
            'maxLength' => 255,
        ],
    ];

    /**
     * Unique security setting ID. Used as part of a URL path and must not include any characters that require URL encoding. You cannot change the ID once an item is created.
     */
    public string $authId {
        set {
            $this->assigning('authId', $value);
            $this->authId = $value;
        }
    }
    public \InfobipSDK\DTOs\N6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f\OneOfCredentialsPayload $credentials;
    public \InfobipSDK\Enums\N6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f\CredentialsType $type;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'authId' => is_string($value) ? $this->authId = $value : parent::assignMember($name, $value),
            'type' => is_string($value) ? $this->type = \InfobipSDK\Enums\N6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f\CredentialsType::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
