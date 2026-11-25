<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N61cea6785aa06882a92b0d6cc8c922ce1d44b92bfbdfd6cde0df0f73fb2499d6;

/**
 * IpPoolAssignIpApiRequest
 */
final class IpPoolAssignIpApiRequest extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'ipId',
    ];

    /**
     * Dedicated IP identifier.
     */
    public string $ipId;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'ipId' => is_string($value) ? $this->ipId = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
