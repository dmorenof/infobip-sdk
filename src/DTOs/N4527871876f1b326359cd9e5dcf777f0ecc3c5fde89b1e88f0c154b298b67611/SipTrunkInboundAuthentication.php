<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611;

/**
 * SipTrunkInboundAuthentication
 *
 * Inbound authentication configuration.
 */
final class SipTrunkInboundAuthentication extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Enables digest authentication for inbound SIP calls.
     */
    public bool $digestAuthenticationEnabled;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'digestAuthenticationEnabled' => is_bool($value) ? $this->digestAuthenticationEnabled = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
