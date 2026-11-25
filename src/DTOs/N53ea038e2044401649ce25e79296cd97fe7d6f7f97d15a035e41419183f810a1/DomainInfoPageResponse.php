<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N53ea038e2044401649ce25e79296cd97fe7d6f7f97d15a035e41419183f810a1;

/**
 * DomainInfoPageResponse
 *
 * Domain get response.
 */
final class DomainInfoPageResponse extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'paging',
    'results',
];

    public \InfobipSDK\DTOs\N53ea038e2044401649ce25e79296cd97fe7d6f7f97d15a035e41419183f810a1\ApiPageDetails $paging;
    /**
     * Domains for requested paging information.
     */
    public \InfobipSDK\Collections\N53ea038e2044401649ce25e79296cd97fe7d6f7f97d15a035e41419183f810a1\DomainInfoPageResponse\ResultsCollection $results;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'paging' => $value instanceof \stdClass ? $this->paging = new \InfobipSDK\DTOs\N53ea038e2044401649ce25e79296cd97fe7d6f7f97d15a035e41419183f810a1\ApiPageDetails($value) : parent::assignMember($name, $value),
            'results' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->results = new \InfobipSDK\Collections\N53ea038e2044401649ce25e79296cd97fe7d6f7f97d15a035e41419183f810a1\DomainInfoPageResponse\ResultsCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \InfobipSDK\DTOs\N53ea038e2044401649ce25e79296cd97fe7d6f7f97d15a035e41419183f810a1\DomainInfo::class)) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
