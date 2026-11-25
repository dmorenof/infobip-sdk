<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611;

/**
 * SipTrunkInboundAuthenticationWithCredentials
 *
 * Generated inbound authentication credentials.
 */
final class SipTrunkInboundAuthenticationWithCredentials extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Indicates whether digest authentication is enabled for inbound SIP calls.
     */
    public bool $digestAuthenticationEnabled;
    /**
     * Password used for digest authentication.
     */
    public string $digestPassword;
    /**
     * Username used for digest authentication.
     */
    public string $digestUsername;
    /**
     * Authorization header value used for authenticating inbound SIP requests.
     */
    public string $headerValue;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'digestAuthenticationEnabled' => is_bool($value) ? $this->digestAuthenticationEnabled = $value : parent::assignMember($name, $value),
            'digestPassword' => is_string($value) ? $this->digestPassword = $value : parent::assignMember($name, $value),
            'digestUsername' => is_string($value) ? $this->digestUsername = $value : parent::assignMember($name, $value),
            'headerValue' => is_string($value) ? $this->headerValue = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
