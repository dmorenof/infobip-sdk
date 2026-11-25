<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\E204fb2d0d1568cbfe90b245006e95aab18e580484154f085b8348d2e991bc11;

/**
 * Step
 *
 * Sender used in OMNI scenario’s step for sending message.
 */
final class Step extends \Dmorenof\SdkRuntime\DTO
{
    public \InfobipSDK\Enums\E204fb2d0d1568cbfe90b245006e95aab18e580484154f085b8348d2e991bc11\OmniChannel $channel;
    /**
     * Sender used in OMNI scenario’s step for sending message.
     */
    public string $from;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'channel' => is_string($value) ? $this->channel = \InfobipSDK\Enums\E204fb2d0d1568cbfe90b245006e95aab18e580484154f085b8348d2e991bc11\OmniChannel::from($value) : parent::assignMember($name, $value),
            'from' => is_string($value) ? $this->from = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
