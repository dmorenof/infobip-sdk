<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\E204fb2d0d1568cbfe90b245006e95aab18e580484154f085b8348d2e991bc11;

/**
 * To
 *
 * The message destination address.
 */
final class To extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Destination email address.
     */
    public string $emailAddress;
    /**
     * Destination phone number. Phone numbers must be in international format (example: `41793026727`).
     */
    public string $phoneNumber;
    /**
     * Unique ID for push registration.
     */
    public string $pushRegistrationId;
    /**
     * WhatsApp Business-Scoped User ID (BSUID). Format: `{CC}.{alphanumeric}` (e.g. `US.13491208655302741918`). Max 150 characters. Phone number takes precedence when both are provided.
     */
    public string $whatsAppUserId;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'emailAddress' => is_string($value) ? $this->emailAddress = $value : parent::assignMember($name, $value),
            'phoneNumber' => is_string($value) ? $this->phoneNumber = $value : parent::assignMember($name, $value),
            'pushRegistrationId' => is_string($value) ? $this->pushRegistrationId = $value : parent::assignMember($name, $value),
            'whatsAppUserId' => is_string($value) ? $this->whatsAppUserId = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
