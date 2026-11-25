<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N5e0af18dea7a9fe7fc7475b275c0dd721ec8be9556c5d111334ce121ba3ef90a;

/**
 * EndTagResponse
 */
final class EndTagResponse extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Process key assigned to account ID.
     */
    public string $processKey;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'processKey' => is_string($value) ? $this->processKey = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
