<?php

declare(strict_types=1);

namespace InfobipSDK\Responses\People\Resource2\Companies\Get;

final class Resource2CompaniesResponse extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'limit' => [
            'format' => 'int32',
        ],
        'page' => [
            'format' => 'int32',
        ],
    ];

    protected const array READ_ONLY_FIELDS = [
        'totalCount',
    ];

    /**
     * List of companies.
     */
    public \InfobipSDK\Collections\N8f56537725b251ff8d954dfe25d40799c66fa1fccf8d6a81cf1331f5159a40d1\BatchCreateRequest\CompaniesCollection $companies;
    /**
     * Limit how many rows will be returned (but possibly less, if the query itself yields fewer rows)
     * Format: int32
     */
    public int $limit {
        set {
            $this->assigning('limit', $value);
            $this->limit = $value;
        }
    }
    /**
     * Results ordering
     */
    public string $orderBy;
    /**
     * Page number
     * Format: int32
     */
    public int $page {
        set {
            $this->assigning('page', $value);
            $this->page = $value;
        }
    }
    /**
     * Total amount of rows
     * Format: int64
     */
    public int $totalCount;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'companies' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->companies = new \InfobipSDK\Collections\N8f56537725b251ff8d954dfe25d40799c66fa1fccf8d6a81cf1331f5159a40d1\BatchCreateRequest\CompaniesCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \InfobipSDK\DTOs\F1f4d23441e1a2e5d9e00e8bea59bdb50b3ee0c91558c0dac55f3a711b5f2d3f\IamCompanyV2::class)) : parent::assignMember($name, $value),
            'limit' => is_int($value) ? $this->limit = $value : parent::assignMember($name, $value),
            'orderBy' => is_string($value) ? $this->orderBy = $value : parent::assignMember($name, $value),
            'page' => is_int($value) ? $this->page = $value : parent::assignMember($name, $value),
            'totalCount' => is_int($value) ? $this->totalCount = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
