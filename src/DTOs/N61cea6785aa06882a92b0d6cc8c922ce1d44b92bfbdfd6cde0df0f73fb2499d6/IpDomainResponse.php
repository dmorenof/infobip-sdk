<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N61cea6785aa06882a92b0d6cc8c922ce1d44b92bfbdfd6cde0df0f73fb2499d6;

/**
 * IpDomainResponse
 */
final class IpDomainResponse extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'id',
        'name',
        'pools',
    ];

    protected const array VALIDATION = [
        'id' => [
            'minimum' => 1,
        ],
        'pools' => [
            'minItems' => 0,
            'uniqueItems' => true,
        ],
    ];

    /**
     * Domain identifier.
     * Format: int64
     */
    public int $id {
        set {
            $this->assigning('id', $value);
            $this->id = $value;
        }
    }
    /**
     * Domain name.
     */
    public string $name;
    public \InfobipSDK\Collections\N61cea6785aa06882a92b0d6cc8c922ce1d44b92bfbdfd6cde0df0f73fb2499d6\IpDomainResponse\PoolsCollection $pools {
        set {
            $this->assigning('pools', $value);
            $this->pools = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'id' => is_int($value) ? $this->id = $value : parent::assignMember($name, $value),
            'name' => is_string($value) ? $this->name = $value : parent::assignMember($name, $value),
            'pools' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->pools = new \InfobipSDK\Collections\N61cea6785aa06882a92b0d6cc8c922ce1d44b92bfbdfd6cde0df0f73fb2499d6\IpDomainResponse\PoolsCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \InfobipSDK\DTOs\N61cea6785aa06882a92b0d6cc8c922ce1d44b92bfbdfd6cde0df0f73fb2499d6\DomainIpApiPool::class)) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
