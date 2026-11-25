<?php

declare(strict_types=1);

namespace InfobipSDK\Responses\Errors;

final class Status500Variant3Response extends \Dmorenof\SdkRuntime\DTO
{
    public \InfobipSDK\DTOs\C4fb96364cd87b1d1d15720880c5153ef26f58342e4ec03b9d5896f2251f17ae\ErrorDto $error;
    /**
     * Unique request identifier.
     * Format: uuid
     */
    public string $token;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'error' => $value instanceof \stdClass ? $this->error = new \InfobipSDK\DTOs\C4fb96364cd87b1d1d15720880c5153ef26f58342e4ec03b9d5896f2251f17ae\ErrorDto($value) : parent::assignMember($name, $value),
            'token' => is_string($value) ? $this->token = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
