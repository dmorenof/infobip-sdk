<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N09ef6171198229ad9a73a413d2271afa3ba31b9abbd6cd8a0cc9563fd721f1ed;

/**
 * ArticleDetailResponse
 */
final class ArticleDetailResponse extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'breadcrumb',
        'category',
        'content',
        'createdAt',
        'id',
        'lastUpdatedAt',
        'likeCount',
        'links',
        'name',
        'scope',
        'status',
        'tags',
        'viewCount',
        'visibility',
    ];

    protected const array VALIDATION = [
        'likeCount' => [
            'format' => 'int32',
        ],
        'viewCount' => [
            'format' => 'int32',
        ],
    ];

    /**
     * Navigation breadcrumb path.
     * Example: ["Documentation","API Guides"]
     */
    public \InfobipSDK\Collections\StringCollection $breadcrumb;
    public \InfobipSDK\DTOs\N09ef6171198229ad9a73a413d2271afa3ba31b9abbd6cd8a0cc9563fd721f1ed\CategoryResponse $category;
    /**
     * Number of comments on the article.
     * Example: 5
     * Format: int64
     */
    public int $commentsCount;
    /**
     * Content of the article in HTML format.
     * Example: "<h1>Introduction</h1><p>This guide covers the basics of the SMS API.</p>"
     */
    public string $content;
    /**
     * Timestamp of when the article was created.
     * Example: "2025-06-01T08:30:00Z"
     * Format: date-time
     */
    public string $createdAt;
    public \InfobipSDK\DTOs\N09ef6171198229ad9a73a413d2271afa3ba31b9abbd6cd8a0cc9563fd721f1ed\UserData $createdBy;
    public \InfobipSDK\DTOs\N09ef6171198229ad9a73a413d2271afa3ba31b9abbd6cd8a0cc9563fd721f1ed\FolderResponse $folder;
    /**
     * Unique identifier of the article.
     * Example: "3fa85f64-5717-4562-b3fc-2c963f66afa6"
     * Format: uuid
     */
    public string $id;
    /**
     * Timestamp of when the article was last published.
     * Example: "2025-06-15T12:00:00Z"
     * Format: date-time
     */
    public string $lastPublishedAt;
    public \InfobipSDK\DTOs\N09ef6171198229ad9a73a413d2271afa3ba31b9abbd6cd8a0cc9563fd721f1ed\UserData $lastPublishedBy;
    /**
     * Timestamp of when the article was last updated.
     * Example: "2025-06-15T14:20:00Z"
     * Format: date-time
     */
    public string $lastUpdatedAt;
    public \InfobipSDK\DTOs\N09ef6171198229ad9a73a413d2271afa3ba31b9abbd6cd8a0cc9563fd721f1ed\UserData $lastUpdatedBy;
    /**
     * Count of positive feedbacks.
     * Example: 12
     * Format: int32
     */
    public int $likeCount {
        set {
            $this->assigning('likeCount', $value);
            $this->likeCount = $value;
        }
    }
    /**
     * Whether the current user has liked this article. Null when no user context is available.
     * Example: false
     */
    public bool $likedByUser;
    /**
     * List of Articles Or Attachments linked to the article.
     */
    public \InfobipSDK\Collections\N09ef6171198229ad9a73a413d2271afa3ba31b9abbd6cd8a0cc9563fd721f1ed\ArticleDetailResponse\LinksCollection $links;
    /**
     * Name of the article.
     * Example: "Getting Started with SMS API"
     */
    public string $name;
    /**
     * URL to the public content page.
     * Example: "https://kb.infobip.com/articles/3fa85f64"
     */
    public ?string $publicContentUrl;
    public \InfobipSDK\Enums\N09ef6171198229ad9a73a413d2271afa3ba31b9abbd6cd8a0cc9563fd721f1ed\ContentScope $scope;
    public \InfobipSDK\Enums\N09ef6171198229ad9a73a413d2271afa3ba31b9abbd6cd8a0cc9563fd721f1ed\ContentSource $source;
    public \InfobipSDK\Enums\N09ef6171198229ad9a73a413d2271afa3ba31b9abbd6cd8a0cc9563fd721f1ed\WorkflowStatus $status;
    /**
     * Whether the current user is subscribed to this article. Null when no user context is available.
     * Example: true
     */
    public bool $subscribedByUser;
    /**
     * Tags assigned to the article.
     */
    public \InfobipSDK\Collections\N09ef6171198229ad9a73a413d2271afa3ba31b9abbd6cd8a0cc9563fd721f1ed\ArticleDetailResponse\TagsCollection $tags;
    /**
     * Total view count.
     * Example: 350
     * Format: int32
     */
    public int $viewCount {
        set {
            $this->assigning('viewCount', $value);
            $this->viewCount = $value;
        }
    }
    public \InfobipSDK\Enums\N09ef6171198229ad9a73a413d2271afa3ba31b9abbd6cd8a0cc9563fd721f1ed\ContentVisibility $visibility;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'breadcrumb' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->breadcrumb = new \InfobipSDK\Collections\StringCollection($value) : parent::assignMember($name, $value),
            'category' => $value instanceof \stdClass ? $this->category = new \InfobipSDK\DTOs\N09ef6171198229ad9a73a413d2271afa3ba31b9abbd6cd8a0cc9563fd721f1ed\CategoryResponse($value) : parent::assignMember($name, $value),
            'commentsCount' => is_int($value) ? $this->commentsCount = $value : parent::assignMember($name, $value),
            'content' => is_string($value) ? $this->content = $value : parent::assignMember($name, $value),
            'createdAt' => is_string($value) ? $this->createdAt = $value : parent::assignMember($name, $value),
            'createdBy' => $value instanceof \stdClass ? $this->createdBy = new \InfobipSDK\DTOs\N09ef6171198229ad9a73a413d2271afa3ba31b9abbd6cd8a0cc9563fd721f1ed\UserData($value) : parent::assignMember($name, $value),
            'folder' => $value instanceof \stdClass ? $this->folder = new \InfobipSDK\DTOs\N09ef6171198229ad9a73a413d2271afa3ba31b9abbd6cd8a0cc9563fd721f1ed\FolderResponse($value) : parent::assignMember($name, $value),
            'id' => is_string($value) ? $this->id = $value : parent::assignMember($name, $value),
            'lastPublishedAt' => is_string($value) ? $this->lastPublishedAt = $value : parent::assignMember($name, $value),
            'lastPublishedBy' => $value instanceof \stdClass ? $this->lastPublishedBy = new \InfobipSDK\DTOs\N09ef6171198229ad9a73a413d2271afa3ba31b9abbd6cd8a0cc9563fd721f1ed\UserData($value) : parent::assignMember($name, $value),
            'lastUpdatedAt' => is_string($value) ? $this->lastUpdatedAt = $value : parent::assignMember($name, $value),
            'lastUpdatedBy' => $value instanceof \stdClass ? $this->lastUpdatedBy = new \InfobipSDK\DTOs\N09ef6171198229ad9a73a413d2271afa3ba31b9abbd6cd8a0cc9563fd721f1ed\UserData($value) : parent::assignMember($name, $value),
            'likeCount' => is_int($value) ? $this->likeCount = $value : parent::assignMember($name, $value),
            'likedByUser' => is_bool($value) ? $this->likedByUser = $value : parent::assignMember($name, $value),
            'links' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->links = new \InfobipSDK\Collections\N09ef6171198229ad9a73a413d2271afa3ba31b9abbd6cd8a0cc9563fd721f1ed\ArticleDetailResponse\LinksCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \InfobipSDK\DTOs\N09ef6171198229ad9a73a413d2271afa3ba31b9abbd6cd8a0cc9563fd721f1ed\ArticleLinkDetailResponse::class)) : parent::assignMember($name, $value),
            'name' => is_string($value) ? $this->name = $value : parent::assignMember($name, $value),
            'publicContentUrl' => $value === null || is_string($value) ? $this->publicContentUrl = $value : parent::assignMember($name, $value),
            'scope' => is_string($value) ? $this->scope = \InfobipSDK\Enums\N09ef6171198229ad9a73a413d2271afa3ba31b9abbd6cd8a0cc9563fd721f1ed\ContentScope::from($value) : parent::assignMember($name, $value),
            'source' => is_string($value) ? $this->source = \InfobipSDK\Enums\N09ef6171198229ad9a73a413d2271afa3ba31b9abbd6cd8a0cc9563fd721f1ed\ContentSource::from($value) : parent::assignMember($name, $value),
            'status' => is_string($value) ? $this->status = \InfobipSDK\Enums\N09ef6171198229ad9a73a413d2271afa3ba31b9abbd6cd8a0cc9563fd721f1ed\WorkflowStatus::from($value) : parent::assignMember($name, $value),
            'subscribedByUser' => is_bool($value) ? $this->subscribedByUser = $value : parent::assignMember($name, $value),
            'tags' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->tags = new \InfobipSDK\Collections\N09ef6171198229ad9a73a413d2271afa3ba31b9abbd6cd8a0cc9563fd721f1ed\ArticleDetailResponse\TagsCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \InfobipSDK\DTOs\N09ef6171198229ad9a73a413d2271afa3ba31b9abbd6cd8a0cc9563fd721f1ed\TagSimpleResponse::class)) : parent::assignMember($name, $value),
            'viewCount' => is_int($value) ? $this->viewCount = $value : parent::assignMember($name, $value),
            'visibility' => is_string($value) ? $this->visibility = \InfobipSDK\Enums\N09ef6171198229ad9a73a413d2271afa3ba31b9abbd6cd8a0cc9563fd721f1ed\ContentVisibility::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
