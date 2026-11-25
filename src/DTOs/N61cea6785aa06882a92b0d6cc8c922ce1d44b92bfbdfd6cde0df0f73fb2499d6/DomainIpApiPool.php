<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N61cea6785aa06882a92b0d6cc8c922ce1d44b92bfbdfd6cde0df0f73fb2499d6;

/**
 * DomainIpApiPool
 *
 * IP pools assigned to the domain. Assigned IP pools with the lowest priority value have the highest sending precedence.
 */
final class DomainIpApiPool extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'id',
    'ips',
    'name',
    'priority',
];

    protected const array VALIDATION = [
    'ips' => [
        'minItems' => 0,
        'uniqueItems' => true,
    ],
    'priority' => [
        'minimum' => 0,
        'maximum' => 49,
        'format' => 'int32',
    ],
];

    /**
     * IP pool identifier.
     */
    public string $id;
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
    /**
     * IP pool sending priority. Higher value will result in a lower sending precedence for the specified IP pool.
     * Format: int32
     */
    public int $priority {
        set {
            $this->assigning('priority', $value);
            $this->priority = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'id' => is_string($value) ? $this->id = $value : parent::assignMember($name, $value),
            'ips' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->ips = new \InfobipSDK\Collections\N61cea6785aa06882a92b0d6cc8c922ce1d44b92bfbdfd6cde0df0f73fb2499d6\DomainIpApiPool\IpsCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \InfobipSDK\DTOs\N61cea6785aa06882a92b0d6cc8c922ce1d44b92bfbdfd6cde0df0f73fb2499d6\IpResponse::class)) : parent::assignMember($name, $value),
            'name' => is_string($value) ? $this->name = $value : parent::assignMember($name, $value),
            'priority' => is_int($value) ? $this->priority = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
