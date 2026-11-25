<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611;

/**
 * SipTrunkAuthenticationWithCredentials
 *
 * Generated authentication credentials for inbound and outbound calls.
 */
final class SipTrunkAuthenticationWithCredentials extends \Dmorenof\SdkRuntime\DTO
{
    public \InfobipSDK\DTOs\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\SipTrunkInboundAuthenticationWithCredentials $inbound;
    public \InfobipSDK\DTOs\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\SipTrunkOutboundAuthenticationWithCredentials $outbound;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'inbound' => $value instanceof \stdClass ? $this->inbound = new \InfobipSDK\DTOs\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\SipTrunkInboundAuthenticationWithCredentials($value) : parent::assignMember($name, $value),
            'outbound' => $value instanceof \stdClass ? $this->outbound = new \InfobipSDK\DTOs\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\SipTrunkOutboundAuthenticationWithCredentials($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
