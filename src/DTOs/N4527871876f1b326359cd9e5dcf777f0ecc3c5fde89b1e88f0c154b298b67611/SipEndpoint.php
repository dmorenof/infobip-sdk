<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611;

/**
 * SipEndpoint
 */
final class SipEndpoint extends \InfobipSDK\DTOs\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\CallEndpoint
{
    public const array REQUIRED_FIELDS = [];

    /**
     * Custom headers. Only headers starting with `X-` prefix will be propagated.
     */
    public \InfobipSDK\DTOs\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\SipEndpoint\CustomHeadersMap $customHeaders;
    /**
     * SIP trunk ID.
     */
    public string $sipTrunkId;
    /**
     * SIP endpoint username.
     */
    public string $username;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'sipTrunkId' => is_string($value) ? $this->sipTrunkId = $value : parent::assignMember($name, $value),
            'username' => is_string($value) ? $this->username = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
