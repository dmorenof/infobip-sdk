<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N09ef6171198229ad9a73a413d2271afa3ba31b9abbd6cd8a0cc9563fd721f1ed;

/**
 * ArticleVersionDetailResponse
 *
 * The list of the results for this page.
 */
final class ArticleVersionDetailResponse extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'attachmentsAdded',
    'attachmentsRemoved',
    'author',
    'contentModified',
    'id',
    'nameModified',
    'tagsAdded',
    'tagsRemoved',
    'versionTimestamp',
    'visibility',
    'workflowStatus',
    'workflowStatusModified',
];

    protected const array VALIDATION = [
    'attachmentsAdded' => [
        'format' => 'int32',
    ],
    'attachmentsRemoved' => [
        'format' => 'int32',
    ],
    'tagsAdded' => [
        'format' => 'int32',
    ],
    'tagsRemoved' => [
        'format' => 'int32',
    ],
];

    /**
     * Number of attachments added in this version.
     * Example: 1
     * Format: int32
     */
    public int $attachmentsAdded {
        set {
            $this->assigning('attachmentsAdded', $value);
            $this->attachmentsAdded = $value;
        }
    }
    /**
     * Number of attachments removed in this version.
     * Example: 0
     * Format: int32
     */
    public int $attachmentsRemoved {
        set {
            $this->assigning('attachmentsRemoved', $value);
            $this->attachmentsRemoved = $value;
        }
    }
    public \InfobipSDK\DTOs\N09ef6171198229ad9a73a413d2271afa3ba31b9abbd6cd8a0cc9563fd721f1ed\UserData $author;
    /**
     * Whether the content was changed in this version.
     * Example: false
     */
    public bool $contentModified;
    /**
     * Article version identifier.
     * Example: 42
     * Format: int64
     */
    public int $id;
    /**
     * Whether the name was changed in this version.
     * Example: false
     */
    public bool $nameModified;
    /**
     * Number of tags added in this version.
     * Example: 2
     * Format: int32
     */
    public int $tagsAdded {
        set {
            $this->assigning('tagsAdded', $value);
            $this->tagsAdded = $value;
        }
    }
    /**
     * Number of tags removed in this version.
     * Example: 0
     * Format: int32
     */
    public int $tagsRemoved {
        set {
            $this->assigning('tagsRemoved', $value);
            $this->tagsRemoved = $value;
        }
    }
    /**
     * Timestamp when this version was created.
     * Example: "2025-06-15T10:30:00Z"
     * Format: date-time
     */
    public string $versionTimestamp;
    public \InfobipSDK\Enums\N09ef6171198229ad9a73a413d2271afa3ba31b9abbd6cd8a0cc9563fd721f1ed\ContentVisibility $visibility;
    public \InfobipSDK\Enums\N09ef6171198229ad9a73a413d2271afa3ba31b9abbd6cd8a0cc9563fd721f1ed\WorkflowStatus $workflowStatus;
    /**
     * Whether the workflow status was changed in this version.
     * Example: true
     */
    public bool $workflowStatusModified;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'attachmentsAdded' => is_int($value) ? $this->attachmentsAdded = $value : parent::assignMember($name, $value),
            'attachmentsRemoved' => is_int($value) ? $this->attachmentsRemoved = $value : parent::assignMember($name, $value),
            'author' => $value instanceof \stdClass ? $this->author = new \InfobipSDK\DTOs\N09ef6171198229ad9a73a413d2271afa3ba31b9abbd6cd8a0cc9563fd721f1ed\UserData($value) : parent::assignMember($name, $value),
            'contentModified' => is_bool($value) ? $this->contentModified = $value : parent::assignMember($name, $value),
            'id' => is_int($value) ? $this->id = $value : parent::assignMember($name, $value),
            'nameModified' => is_bool($value) ? $this->nameModified = $value : parent::assignMember($name, $value),
            'tagsAdded' => is_int($value) ? $this->tagsAdded = $value : parent::assignMember($name, $value),
            'tagsRemoved' => is_int($value) ? $this->tagsRemoved = $value : parent::assignMember($name, $value),
            'versionTimestamp' => is_string($value) ? $this->versionTimestamp = $value : parent::assignMember($name, $value),
            'visibility' => is_string($value) ? $this->visibility = \InfobipSDK\Enums\N09ef6171198229ad9a73a413d2271afa3ba31b9abbd6cd8a0cc9563fd721f1ed\ContentVisibility::from($value) : parent::assignMember($name, $value),
            'workflowStatus' => is_string($value) ? $this->workflowStatus = \InfobipSDK\Enums\N09ef6171198229ad9a73a413d2271afa3ba31b9abbd6cd8a0cc9563fd721f1ed\WorkflowStatus::from($value) : parent::assignMember($name, $value),
            'workflowStatusModified' => is_bool($value) ? $this->workflowStatusModified = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
