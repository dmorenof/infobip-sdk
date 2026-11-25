<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\B839d8c276f6f1ef62ce2dce758ba402953b31f455d6d08549a7147d79f50d62;

/**
 * RcsMessageRequestOptions
 */
final class RcsMessageRequestOptions extends \Dmorenof\SdkRuntime\DTO
{
    public \InfobipSDK\DTOs\B839d8c276f6f1ef62ce2dce758ba402953b31f455d6d08549a7147d79f50d62\RcsMessageOrderingOptions $messageOrdering;
    public \InfobipSDK\DTOs\B839d8c276f6f1ef62ce2dce758ba402953b31f455d6d08549a7147d79f50d62\RequestSchedulingSettings $schedule;
    public \InfobipSDK\DTOs\B839d8c276f6f1ef62ce2dce758ba402953b31f455d6d08549a7147d79f50d62\UrlOptions $tracking;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'messageOrdering' => $value instanceof \stdClass ? $this->messageOrdering = new \InfobipSDK\DTOs\B839d8c276f6f1ef62ce2dce758ba402953b31f455d6d08549a7147d79f50d62\RcsMessageOrderingOptions($value) : parent::assignMember($name, $value),
            'schedule' => $value instanceof \stdClass ? $this->schedule = new \InfobipSDK\DTOs\B839d8c276f6f1ef62ce2dce758ba402953b31f455d6d08549a7147d79f50d62\RequestSchedulingSettings($value) : parent::assignMember($name, $value),
            'tracking' => $value instanceof \stdClass ? $this->tracking = new \InfobipSDK\DTOs\B839d8c276f6f1ef62ce2dce758ba402953b31f455d6d08549a7147d79f50d62\UrlOptions($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
