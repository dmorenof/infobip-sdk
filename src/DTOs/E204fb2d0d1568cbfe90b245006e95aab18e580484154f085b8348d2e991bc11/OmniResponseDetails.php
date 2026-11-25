<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\E204fb2d0d1568cbfe90b245006e95aab18e580484154f085b8348d2e991bc11;

/**
 * OmniResponseDetails
 *
 * Array of sent message objects, one object per every message.
 */
final class OmniResponseDetails extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * The ID that uniquely identifies the sent message.
     */
    public string $messageId;
    public \InfobipSDK\DTOs\E204fb2d0d1568cbfe90b245006e95aab18e580484154f085b8348d2e991bc11\Status $status;
    public \InfobipSDK\DTOs\E204fb2d0d1568cbfe90b245006e95aab18e580484154f085b8348d2e991bc11\To $to;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'messageId' => is_string($value) ? $this->messageId = $value : parent::assignMember($name, $value),
            'status' => $value instanceof \stdClass ? $this->status = new \InfobipSDK\DTOs\E204fb2d0d1568cbfe90b245006e95aab18e580484154f085b8348d2e991bc11\Status($value) : parent::assignMember($name, $value),
            'to' => $value instanceof \stdClass ? $this->to = new \InfobipSDK\DTOs\E204fb2d0d1568cbfe90b245006e95aab18e580484154f085b8348d2e991bc11\To($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
