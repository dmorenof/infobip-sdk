<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N62d9ebafb4f8a59174952b52d2134c8b74a981fb89910acb47a5dc3a9064656e;

/**
 * BatchDeleteRequest
 */
final class BatchDeleteRequest extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * List of companies.
     */
    public \InfobipSDK\Collections\N62d9ebafb4f8a59174952b52d2134c8b74a981fb89910acb47a5dc3a9064656e\BatchDeleteRequest\CompaniesCollection $companies;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'companies' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->companies = new \InfobipSDK\Collections\N62d9ebafb4f8a59174952b52d2134c8b74a981fb89910acb47a5dc3a9064656e\BatchDeleteRequest\CompaniesCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \InfobipSDK\DTOs\N62d9ebafb4f8a59174952b52d2134c8b74a981fb89910acb47a5dc3a9064656e\BatchDeleteEntry::class)) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
