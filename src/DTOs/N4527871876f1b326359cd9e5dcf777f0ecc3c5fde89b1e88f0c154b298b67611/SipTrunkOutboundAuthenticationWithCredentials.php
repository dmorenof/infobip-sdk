<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611;

/**
 * SipTrunkOutboundAuthenticationWithCredentials
 *
 * Generated outbound authentication credentials.
 */
final class SipTrunkOutboundAuthenticationWithCredentials extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Password used for outbound digest authentication.
     */
    public string $digestPassword;
    /**
     * Username used for outbound digest authentication.
     */
    public string $digestUsername;
    /**
     * Fully qualified domain name of the remote SIP endpoint for outbound calls.
     */
    public string $fqdn;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'digestPassword' => is_string($value) ? $this->digestPassword = $value : parent::assignMember($name, $value),
            'digestUsername' => is_string($value) ? $this->digestUsername = $value : parent::assignMember($name, $value),
            'fqdn' => is_string($value) ? $this->fqdn = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
