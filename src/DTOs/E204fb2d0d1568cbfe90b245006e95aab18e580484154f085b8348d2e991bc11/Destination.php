<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\E204fb2d0d1568cbfe90b245006e95aab18e580484154f085b8348d2e991bc11;

/**
 * Destination
 *
 * Destinations to which you are sending a message, such as phone number, email address, or unique ID.
 */
final class Destination extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * The ID that uniquely identifies the message sent.
     */
    public string $messageId;
    public \InfobipSDK\DTOs\E204fb2d0d1568cbfe90b245006e95aab18e580484154f085b8348d2e991bc11\To $to;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'messageId' => is_string($value) ? $this->messageId = $value : parent::assignMember($name, $value),
            'to' => $value instanceof \stdClass ? $this->to = new \InfobipSDK\DTOs\E204fb2d0d1568cbfe90b245006e95aab18e580484154f085b8348d2e991bc11\To($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
