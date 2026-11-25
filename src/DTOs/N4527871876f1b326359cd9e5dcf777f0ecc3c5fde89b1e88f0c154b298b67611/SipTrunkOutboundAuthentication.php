<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611;

/**
 * SipTrunkOutboundAuthentication
 *
 * Outbound authentication configuration.
 */
final class SipTrunkOutboundAuthentication extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Fully qualified domain name of the remote SIP endpoint for outbound calls.
     */
    public string $fqdn;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'fqdn' => is_string($value) ? $this->fqdn = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
