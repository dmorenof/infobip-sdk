<?php

declare(strict_types=1);

namespace InfobipSDK\Responses\Mi\NumberIntelligence\Resource1\Query;

final class Post extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Unique request identifier.
     * Format: uuid
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
