<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N61cea6785aa06882a92b0d6cc8c922ce1d44b92bfbdfd6cde0df0f73fb2499d6;

/**
 * IpPoolDetailResponse
 */
final class IpPoolDetailResponse extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'id',
        'ips',
        'name',
    ];

    protected const array VALIDATION = [
        'ips' => [
            'minItems' => 0,
            'uniqueItems' => true,
        ],
    ];

    /**
     * IP pool identifier.
     */
    public string $id;
    /**
     * Dedicated IPs assigned to the provided IP pool.
     */
    public \InfobipSDK\Collections\N61cea6785aa06882a92b0d6cc8c922ce1d44b92bfbdfd6cde0df0f73fb2499d6\DomainIpApiPool\IpsCollection $ips {
        set {
            $this->assigning('ips', $value);
            $this->ips = $value;
        }
    }
    /**
     * IP pool name.
     */
    public string $name;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'id' => is_string($value) ? $this->id = $value : parent::assignMember($name, $value),
            'ips' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->ips = new \InfobipSDK\Collections\N61cea6785aa06882a92b0d6cc8c922ce1d44b92bfbdfd6cde0df0f73fb2499d6\DomainIpApiPool\IpsCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \InfobipSDK\DTOs\N61cea6785aa06882a92b0d6cc8c922ce1d44b92bfbdfd6cde0df0f73fb2499d6\IpResponse::class)) : parent::assignMember($name, $value),
            'name' => is_string($value) ? $this->name = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
