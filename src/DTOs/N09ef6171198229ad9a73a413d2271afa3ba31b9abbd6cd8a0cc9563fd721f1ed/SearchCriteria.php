<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N09ef6171198229ad9a73a413d2271afa3ba31b9abbd6cd8a0cc9563fd721f1ed;

/**
 * SearchCriteria
 */
final class SearchCriteria extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'searchExp',
    ];

    /**
     * Key-value filter pairs for advanced search criteria.
     * Example: {"type":"ARTICLE","visibility":"PUBLIC"}
     */
    public \InfobipSDK\DTOs\N09ef6171198229ad9a73a413d2271afa3ba31b9abbd6cd8a0cc9563fd721f1ed\SearchCriteria\FilterMap $filter;
    /**
     * Search expression to filter results by. Required; an empty string returns no matches.
     * Example: "SMS API"
     */
    public string $searchExp;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'searchExp' => is_string($value) ? $this->searchExp = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
