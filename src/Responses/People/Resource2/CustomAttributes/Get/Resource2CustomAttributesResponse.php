<?php

declare(strict_types=1);

namespace InfobipSDK\Responses\People\Resource2\CustomAttributes\Get;

final class Resource2CustomAttributesResponse extends \Dmorenof\SdkRuntime\DTO
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
     * List of custom attributes.
     */
    public \InfobipSDK\Collections\N0797f98960a9d1f4df946ffe53c3c4e3e5cdc1dc56732cd123c79fa96c6ddca1\CustomAttributesResponse\CustomAttributesCollection $customAttributes;
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
            'customAttributes' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->customAttributes = new \InfobipSDK\Collections\N0797f98960a9d1f4df946ffe53c3c4e3e5cdc1dc56732cd123c79fa96c6ddca1\CustomAttributesResponse\CustomAttributesCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \InfobipSDK\DTOs\N0797f98960a9d1f4df946ffe53c3c4e3e5cdc1dc56732cd123c79fa96c6ddca1\IamCustomAttribute::class)) : parent::assignMember($name, $value),
            'limit' => is_int($value) ? $this->limit = $value : parent::assignMember($name, $value),
            'orderBy' => is_string($value) ? $this->orderBy = $value : parent::assignMember($name, $value),
            'page' => is_int($value) ? $this->page = $value : parent::assignMember($name, $value),
            'totalCount' => is_int($value) ? $this->totalCount = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
