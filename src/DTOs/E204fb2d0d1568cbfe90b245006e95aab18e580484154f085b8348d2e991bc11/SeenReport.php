<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\E204fb2d0d1568cbfe90b245006e95aab18e580484154f085b8348d2e991bc11;

/**
 * SeenReport
 *
 * Collection of reports, one per every received message.
 */
final class SeenReport extends \Dmorenof\SdkRuntime\DTO
{
    public \InfobipSDK\DTOs\N8a2ea8872469b182f7474a94d4bf931da42a6e2a1d1ba07898b1bc7dcdc85cd2\Contact $contact;
    /**
     * Number which sent the message.
     */
    public string $from;
    /**
     * The ID of the sent message.
     */
    public string $messageId;
    /**
     * Tells when the message was seen.
     * Format: date-time
     */
    public string $seenAt;
    /**
     * Tells when the message was sent.
     * Format: date-time
     */
    public string $sendAt;
    /**
     * Sender provided during the activation process.
     */
    public string $to;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'contact' => $value instanceof \stdClass ? $this->contact = new \InfobipSDK\DTOs\N8a2ea8872469b182f7474a94d4bf931da42a6e2a1d1ba07898b1bc7dcdc85cd2\Contact($value) : parent::assignMember($name, $value),
            'from' => is_string($value) ? $this->from = $value : parent::assignMember($name, $value),
            'messageId' => is_string($value) ? $this->messageId = $value : parent::assignMember($name, $value),
            'seenAt' => is_string($value) ? $this->seenAt = $value : parent::assignMember($name, $value),
            'sendAt' => is_string($value) ? $this->sendAt = $value : parent::assignMember($name, $value),
            'to' => is_string($value) ? $this->to = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
