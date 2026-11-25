<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N09ef6171198229ad9a73a413d2271afa3ba31b9abbd6cd8a0cc9563fd721f1ed;

/**
 * CreateUpdateArticleRequest
 */
final class CreateUpdateArticleRequest extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'categoryId',
        'content',
        'links',
        'name',
        'status',
        'tags',
    ];

    protected const array VALIDATION = [
        'content' => [
            'minLength' => 1,
        ],
        'name' => [
            'minLength' => 3,
            'maxLength' => 255,
        ],
    ];

    /**
     * Category identifier to assign the article to.
     * Example: "a1b2c3d4-5678-9012-abcd-ef1234567890"
     * Format: uuid
     */
    public string $categoryId;
    /**
     * Content of the article in HTML format.
     * Example: "<h1>Introduction</h1><p>This guide covers the basics of the SMS API.</p>"
     */
    public string $content {
        set {
            $this->assigning('content', $value);
            $this->content = $value;
        }
    }
    /**
     * Folder identifier within the category.
     * Example: "b2c3d4e5-6789-0123-bcde-f12345678901"
     * Format: uuid
     */
    public string $folderId;
    /**
     * List of attachment identifiers to link to the article.
     * Example: ["3fa85f64-5717-4562-b3fc-2c963f66afa6"]
     */
    public \InfobipSDK\Collections\StringCollection $links;
    /**
     * Name of the article.
     * Example: "Getting Started with SMS API"
     */
    public string $name {
        set {
            $this->assigning('name', $value);
            $this->name = $value;
        }
    }
    public \InfobipSDK\Enums\N09ef6171198229ad9a73a413d2271afa3ba31b9abbd6cd8a0cc9563fd721f1ed\WorkflowStatus $status;
    /**
     * List of tag names to assign to the article.
     * Example: ["sms","api","getting-started"]
     */
    public \InfobipSDK\Collections\N09ef6171198229ad9a73a413d2271afa3ba31b9abbd6cd8a0cc9563fd721f1ed\CreateUpdateArticleRequest\TagsCollection $tags;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'categoryId' => is_string($value) ? $this->categoryId = $value : parent::assignMember($name, $value),
            'content' => is_string($value) ? $this->content = $value : parent::assignMember($name, $value),
            'folderId' => is_string($value) ? $this->folderId = $value : parent::assignMember($name, $value),
            'links' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->links = new \InfobipSDK\Collections\StringCollection($value) : parent::assignMember($name, $value),
            'name' => is_string($value) ? $this->name = $value : parent::assignMember($name, $value),
            'status' => is_string($value) ? $this->status = \InfobipSDK\Enums\N09ef6171198229ad9a73a413d2271afa3ba31b9abbd6cd8a0cc9563fd721f1ed\WorkflowStatus::from($value) : parent::assignMember($name, $value),
            'tags' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->tags = new \InfobipSDK\Collections\N09ef6171198229ad9a73a413d2271afa3ba31b9abbd6cd8a0cc9563fd721f1ed\CreateUpdateArticleRequest\TagsCollection($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
