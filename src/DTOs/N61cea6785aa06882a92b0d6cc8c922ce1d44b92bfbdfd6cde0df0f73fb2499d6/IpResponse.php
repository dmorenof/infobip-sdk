<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N61cea6785aa06882a92b0d6cc8c922ce1d44b92bfbdfd6cde0df0f73fb2499d6;

/**
 * IpResponse
 *
 * Dedicated IPs assigned to the IP pool.
 */
final class IpResponse extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'id',
        'ip',
        'ipAddresses',
    ];

    protected const array VALIDATION = [
        'ipAddresses' => [
            'minItems' => 1,
            'uniqueItems' => true,
        ],
    ];

    /**
     * Dedicated IP identifier.
     */
    public string $id;
    /**
     * Dedicated IP address.
     *
     * @deprecated
     */
    public string $ip;
    /**
     * List of IP addresses that are paired together.
     */
    public \InfobipSDK\Collections\N0089ea7cf06f0b77e4c88a7276c6f25dd5c0c5bbab819756fc42c548980cae19\FlowDataResponse\InitialScreensCollection $ipAddresses {
        set {
            $this->assigning('ipAddresses', $value);
            $this->ipAddresses = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'id' => is_string($value) ? $this->id = $value : parent::assignMember($name, $value),
            'ip' => is_string($value) ? $this->ip = $value : parent::assignMember($name, $value),
            'ipAddresses' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->ipAddresses = new \InfobipSDK\Collections\N0089ea7cf06f0b77e4c88a7276c6f25dd5c0c5bbab819756fc42c548980cae19\FlowDataResponse\InitialScreensCollection($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
