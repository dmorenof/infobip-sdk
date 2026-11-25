<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N34438aa163eb13a2a06ad96ae98170e41cc2ee8902e8b7655aba73ceb0bb23f1;

/**
 * AllDomainsResponse
 */
final class AllDomainsResponse extends \Dmorenof\SdkRuntime\DTO
{
    public \InfobipSDK\DTOs\N34438aa163eb13a2a06ad96ae98170e41cc2ee8902e8b7655aba73ceb0bb23f1\Paging $paging;
    /**
     * List of domains that belong to the account.
     */
    public \InfobipSDK\Collections\N34438aa163eb13a2a06ad96ae98170e41cc2ee8902e8b7655aba73ceb0bb23f1\AllDomainsResponse\ResultsCollection $results;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'paging' => $value instanceof \stdClass ? $this->paging = new \InfobipSDK\DTOs\N34438aa163eb13a2a06ad96ae98170e41cc2ee8902e8b7655aba73ceb0bb23f1\Paging($value) : parent::assignMember($name, $value),
            'results' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->results = new \InfobipSDK\Collections\N34438aa163eb13a2a06ad96ae98170e41cc2ee8902e8b7655aba73ceb0bb23f1\AllDomainsResponse\ResultsCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \InfobipSDK\DTOs\N34438aa163eb13a2a06ad96ae98170e41cc2ee8902e8b7655aba73ceb0bb23f1\DomainResponse::class)) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
