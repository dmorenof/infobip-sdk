<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N3206ab1528b990358dc5d8da723b52b5db6e1d582712d39b5ed66ac5c4b1e84f;

/**
 * BatchOperationError
 */
final class BatchOperationError extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Error message
     */
    public string $message;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'message' => is_string($value) ? $this->message = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
