<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\Bb8af9c2d2d4d677e25555100e31662e23d86ede8b5d73bbf4974b4decdd08d7;

/**
 * Session
 */
final class Session extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Session with Token
     */
    public string $token;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'token' => is_string($value) ? $this->token = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
