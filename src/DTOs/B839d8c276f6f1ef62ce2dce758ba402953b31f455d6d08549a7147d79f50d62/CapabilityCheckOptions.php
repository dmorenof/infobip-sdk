<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\B839d8c276f6f1ef62ce2dce758ba402953b31f455d6d08549a7147d79f50d62;

/**
 * CapabilityCheckOptions
 */
final class CapabilityCheckOptions extends \Dmorenof\SdkRuntime\DTO
{
    public \InfobipSDK\DTOs\B839d8c276f6f1ef62ce2dce758ba402953b31f455d6d08549a7147d79f50d62\Platform $platform;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'platform' => $value instanceof \stdClass ? $this->platform = new \InfobipSDK\DTOs\B839d8c276f6f1ef62ce2dce758ba402953b31f455d6d08549a7147d79f50d62\Platform($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
