<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611;

/**
 * WhatsAppEndpoint
 */
final class WhatsAppEndpoint extends \InfobipSDK\DTOs\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\CallEndpoint
{
    public const array REQUIRED_FIELDS = [];

    /**
     * Business-Scoped User ID. Used for outbound call initiation when the callee's phone number is not provided.
     */
    public string $bsuid;
    /**
     * Caller's WhatsApp username. Populated on inbound calls for caller identification.
     */
    public string $displayName;
    /**
     * Phone number in the [E.164](https://en.wikipedia.org/wiki/E.164) format.
     */
    public string $phoneNumber;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'bsuid' => is_string($value) ? $this->bsuid = $value : parent::assignMember($name, $value),
            'displayName' => is_string($value) ? $this->displayName = $value : parent::assignMember($name, $value),
            'phoneNumber' => is_string($value) ? $this->phoneNumber = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
