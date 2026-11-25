<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\Api;

/**
 * ApiErrorResource
 *
 * List of available resources to recover from the error.
 */
final class ErrorResource extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Resource name.
     */
    public string $name;
    /**
     * Resource URL.
     */
    public string $url;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'name' => is_string($value) ? $this->name = $value : parent::assignMember($name, $value),
            'url' => is_string($value) ? $this->url = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
