<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611;

/**
 * RetryProperties
 *
 * Properties indicating whether the event is related with a retried call.
 */
final class RetryProperties extends \Dmorenof\SdkRuntime\DTO
{
    public bool $retry;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'retry' => is_bool($value) ? $this->retry = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
