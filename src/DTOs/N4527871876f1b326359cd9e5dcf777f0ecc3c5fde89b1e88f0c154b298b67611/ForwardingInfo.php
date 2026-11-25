<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611;

/**
 * ForwardingInfo
 *
 * Information about a call diversion/forwarding hop, containing the original destination and the reason for forwarding.
 * Example: "forwardedFrom=[ForwardingInfo(number=41793026727, reason=unconditional)]"
 */
final class ForwardingInfo extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * The phone number from which the call was forwarded.
     * Example: "41793026727"
     */
    public string $number;
    /**
     * The reason why the call was forwarded.
     * Example: "unconditional"
     */
    public string $reason;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'number' => is_string($value) ? $this->number = $value : parent::assignMember($name, $value),
            'reason' => is_string($value) ? $this->reason = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
