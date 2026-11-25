<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f;

/**
 * Security
 *
 * Security configuration.
 */
final class NoIdSecurityRequest extends \Dmorenof\SdkRuntime\DTO
{
    public \InfobipSDK\DTOs\N6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f\OneOfCredentialsPayload $credentials;
    public \InfobipSDK\Enums\N6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f\CredentialsType $type;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'type' => is_string($value) ? $this->type = \InfobipSDK\Enums\N6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f\CredentialsType::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
