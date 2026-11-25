<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f;

/**
 * Security
 *
 * Security configuration.
 */
final class IdOnlySecurityResponse extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Unique authorization ID.
     */
    public string $authId;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'authId' => is_string($value) ? $this->authId = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
