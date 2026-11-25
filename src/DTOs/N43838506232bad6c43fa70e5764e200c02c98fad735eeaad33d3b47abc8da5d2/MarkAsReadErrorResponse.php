<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N43838506232bad6c43fa70e5764e200c02c98fad735eeaad33d3b47abc8da5d2;

/**
 * MarkAsReadErrorResponse
 */
final class MarkAsReadErrorResponse extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Error details
     */
    public string $error;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'error' => is_string($value) ? $this->error = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
