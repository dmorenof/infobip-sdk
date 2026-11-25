<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N1ed350d65e634c5446c08244298a26d3b0bb68a76782ab9246a8035f47d2421c;

/**
 * BlockingConfigListResponse
 *
 * Response containing a list of blocking configurations.
 * Example: {"configs":[{"configId":"37B93F4D2BA3C58B58526EAEAA1AB35A","application":"MyApplication1","entity":"MyEntity1","sensitivity":"NORMAL","enabled":true},{"configId":"CAE07EFA606C6E960BCD4880C72008C1","application":"MyApplication2","entity":"MyEntity2","sensitivity":"NORMAL","enabled":true},{"configId":"1D805F056FF2D448B307FA909A5BF96D","application":"MyApplication3","sensitivity":"NORMAL","enabled":true}]}
 */
final class BlockingConfigListResponse extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'configs',
    ];

    /**
     * List of blocking configurations.
     */
    public \InfobipSDK\Collections\N1ed350d65e634c5446c08244298a26d3b0bb68a76782ab9246a8035f47d2421c\BlockingConfigListResponse\ConfigsCollection $configs;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'configs' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->configs = new \InfobipSDK\Collections\N1ed350d65e634c5446c08244298a26d3b0bb68a76782ab9246a8035f47d2421c\BlockingConfigListResponse\ConfigsCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \InfobipSDK\DTOs\N1ed350d65e634c5446c08244298a26d3b0bb68a76782ab9246a8035f47d2421c\BlockingConfig::class)) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
