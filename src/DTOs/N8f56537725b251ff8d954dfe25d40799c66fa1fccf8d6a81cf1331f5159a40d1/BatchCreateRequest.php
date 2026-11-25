<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N8f56537725b251ff8d954dfe25d40799c66fa1fccf8d6a81cf1331f5159a40d1;

/**
 * BatchCreateRequest
 */
final class BatchCreateRequest extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * List of companies.
     */
    public \InfobipSDK\Collections\N8f56537725b251ff8d954dfe25d40799c66fa1fccf8d6a81cf1331f5159a40d1\BatchCreateRequest\CompaniesCollection $companies;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'companies' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->companies = new \InfobipSDK\Collections\N8f56537725b251ff8d954dfe25d40799c66fa1fccf8d6a81cf1331f5159a40d1\BatchCreateRequest\CompaniesCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \InfobipSDK\DTOs\F1f4d23441e1a2e5d9e00e8bea59bdb50b3ee0c91558c0dac55f3a711b5f2d3f\IamCompanyV2::class)) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
