<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N09ef6171198229ad9a73a413d2271afa3ba31b9abbd6cd8a0cc9563fd721f1ed;

/**
 * ArticleListItemResponse
 *
 * The list of the results for this page.
 */
final class ArticleListItemResponse extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'id',
    'lastUpdatedAt',
    'name',
    'scope',
    'status',
    'tags',
    'visibility',
];

    /**
     * Navigation breadcrumb path from root to article.
     * Example: ["Documentation","API Guides"]
     */
    public \InfobipSDK\Collections\StringCollection $breadcrumb;
    /**
     * Unique identifier of the article.
     * Example: "3fa85f64-5717-4562-b3fc-2c963f66afa6"
     * Format: uuid
     */
    public string $id;
    /**
     * Timestamp of when the article was last updated.
     * Example: "2025-06-15T14:20:00Z"
     * Format: date-time
     */
    public string $lastUpdatedAt;
    /**
     * Name of the article.
     * Example: "Getting Started with SMS API"
     */
    public string $name;
    public \InfobipSDK\Enums\N09ef6171198229ad9a73a413d2271afa3ba31b9abbd6cd8a0cc9563fd721f1ed\ContentScope $scope;
    public \InfobipSDK\Enums\N09ef6171198229ad9a73a413d2271afa3ba31b9abbd6cd8a0cc9563fd721f1ed\ContentSource $source;
    public \InfobipSDK\Enums\N09ef6171198229ad9a73a413d2271afa3ba31b9abbd6cd8a0cc9563fd721f1ed\WorkflowStatus $status;
    /**
     * Tag names assigned to the article.
     * Example: ["sms","api"]
     */
    public \InfobipSDK\Collections\StringCollection $tags;
    public \InfobipSDK\Enums\N09ef6171198229ad9a73a413d2271afa3ba31b9abbd6cd8a0cc9563fd721f1ed\ContentVisibility $visibility;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'breadcrumb' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->breadcrumb = new \InfobipSDK\Collections\StringCollection($value) : parent::assignMember($name, $value),
            'id' => is_string($value) ? $this->id = $value : parent::assignMember($name, $value),
            'lastUpdatedAt' => is_string($value) ? $this->lastUpdatedAt = $value : parent::assignMember($name, $value),
            'name' => is_string($value) ? $this->name = $value : parent::assignMember($name, $value),
            'scope' => is_string($value) ? $this->scope = \InfobipSDK\Enums\N09ef6171198229ad9a73a413d2271afa3ba31b9abbd6cd8a0cc9563fd721f1ed\ContentScope::from($value) : parent::assignMember($name, $value),
            'source' => is_string($value) ? $this->source = \InfobipSDK\Enums\N09ef6171198229ad9a73a413d2271afa3ba31b9abbd6cd8a0cc9563fd721f1ed\ContentSource::from($value) : parent::assignMember($name, $value),
            'status' => is_string($value) ? $this->status = \InfobipSDK\Enums\N09ef6171198229ad9a73a413d2271afa3ba31b9abbd6cd8a0cc9563fd721f1ed\WorkflowStatus::from($value) : parent::assignMember($name, $value),
            'tags' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->tags = new \InfobipSDK\Collections\StringCollection($value) : parent::assignMember($name, $value),
            'visibility' => is_string($value) ? $this->visibility = \InfobipSDK\Enums\N09ef6171198229ad9a73a413d2271afa3ba31b9abbd6cd8a0cc9563fd721f1ed\ContentVisibility::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
