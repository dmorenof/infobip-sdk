<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N09ef6171198229ad9a73a413d2271afa3ba31b9abbd6cd8a0cc9563fd721f1ed;

/**
 * CommentListItemResponse
 */
final class CommentListItemResponse extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'content',
    'createdAt',
    'createdBy',
    'id',
    'lastContentUpdatedAt',
    'lastContentUpdatedBy',
    'lastUpdatedAt',
    'resolved',
];

    /**
     * Content of the comment.
     * Example: "Please review the second paragraph for accuracy."
     */
    public string $content;
    /**
     * Timestamp of when the comment was created.
     * Example: "2025-06-15T10:30:00Z"
     * Format: date-time
     */
    public string $createdAt;
    public \InfobipSDK\DTOs\N09ef6171198229ad9a73a413d2271afa3ba31b9abbd6cd8a0cc9563fd721f1ed\UserData $createdBy;
    /**
     * Unique identifier of the comment.
     * Example: "7c9e6679-7425-40de-944b-e07fc1f90ae7"
     * Format: uuid
     */
    public string $id;
    /**
     * Timestamp of when the comment content was last updated.
     * Example: "2025-06-15T14:20:00Z"
     * Format: date-time
     */
    public string $lastContentUpdatedAt;
    public \InfobipSDK\DTOs\N09ef6171198229ad9a73a413d2271afa3ba31b9abbd6cd8a0cc9563fd721f1ed\UserData $lastContentUpdatedBy;
    /**
     * Timestamp of when the comment was last resolved or unresolved.
     * Example: "2025-06-16T09:00:00Z"
     * Format: date-time
     */
    public string $lastResolvedAt;
    public \InfobipSDK\DTOs\N09ef6171198229ad9a73a413d2271afa3ba31b9abbd6cd8a0cc9563fd721f1ed\UserData $lastSolver;
    /**
     * Timestamp of when the comment was last updated.
     * Example: "2025-06-15T14:20:00Z"
     * Format: date-time
     */
    public string $lastUpdatedAt;
    /**
     * Whether the comment is resolved.
     * Example: false
     */
    public bool $resolved;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'content' => is_string($value) ? $this->content = $value : parent::assignMember($name, $value),
            'createdAt' => is_string($value) ? $this->createdAt = $value : parent::assignMember($name, $value),
            'createdBy' => $value instanceof \stdClass ? $this->createdBy = new \InfobipSDK\DTOs\N09ef6171198229ad9a73a413d2271afa3ba31b9abbd6cd8a0cc9563fd721f1ed\UserData($value) : parent::assignMember($name, $value),
            'id' => is_string($value) ? $this->id = $value : parent::assignMember($name, $value),
            'lastContentUpdatedAt' => is_string($value) ? $this->lastContentUpdatedAt = $value : parent::assignMember($name, $value),
            'lastContentUpdatedBy' => $value instanceof \stdClass ? $this->lastContentUpdatedBy = new \InfobipSDK\DTOs\N09ef6171198229ad9a73a413d2271afa3ba31b9abbd6cd8a0cc9563fd721f1ed\UserData($value) : parent::assignMember($name, $value),
            'lastResolvedAt' => is_string($value) ? $this->lastResolvedAt = $value : parent::assignMember($name, $value),
            'lastSolver' => $value instanceof \stdClass ? $this->lastSolver = new \InfobipSDK\DTOs\N09ef6171198229ad9a73a413d2271afa3ba31b9abbd6cd8a0cc9563fd721f1ed\UserData($value) : parent::assignMember($name, $value),
            'lastUpdatedAt' => is_string($value) ? $this->lastUpdatedAt = $value : parent::assignMember($name, $value),
            'resolved' => is_bool($value) ? $this->resolved = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
