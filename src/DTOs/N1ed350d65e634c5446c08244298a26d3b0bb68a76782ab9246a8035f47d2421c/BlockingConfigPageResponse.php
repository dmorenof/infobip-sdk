<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N1ed350d65e634c5446c08244298a26d3b0bb68a76782ab9246a8035f47d2421c;

/**
 * BlockingConfigPageResponse
 *
 * Paginated response containing a list of blocking configurations.
 */
final class BlockingConfigPageResponse extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'paging',
    'results',
];

    public \InfobipSDK\DTOs\N1ed350d65e634c5446c08244298a26d3b0bb68a76782ab9246a8035f47d2421c\PageInfo $paging;
    /**
     * List of blocking configurations.
     */
    public \InfobipSDK\Collections\N1ed350d65e634c5446c08244298a26d3b0bb68a76782ab9246a8035f47d2421c\BlockingConfigListResponse\ConfigsCollection $results;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'paging' => $value instanceof \stdClass ? $this->paging = new \InfobipSDK\DTOs\N1ed350d65e634c5446c08244298a26d3b0bb68a76782ab9246a8035f47d2421c\PageInfo($value) : parent::assignMember($name, $value),
            'results' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->results = new \InfobipSDK\Collections\N1ed350d65e634c5446c08244298a26d3b0bb68a76782ab9246a8035f47d2421c\BlockingConfigListResponse\ConfigsCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \InfobipSDK\DTOs\N1ed350d65e634c5446c08244298a26d3b0bb68a76782ab9246a8035f47d2421c\BlockingConfig::class)) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
