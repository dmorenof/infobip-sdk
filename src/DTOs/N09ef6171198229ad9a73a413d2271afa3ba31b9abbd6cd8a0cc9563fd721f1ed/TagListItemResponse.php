<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N09ef6171198229ad9a73a413d2271afa3ba31b9abbd6cd8a0cc9563fd721f1ed;

/**
 * TagListItemResponse
 *
 * The list of the results for this page.
 */
final class TagListItemResponse extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'createdAt',
        'id',
        'lastUpdatedAt',
        'name',
        'referencesCount',
    ];

    protected const array VALIDATION = [
        'referencesCount' => [
            'format' => 'int32',
        ],
    ];

    /**
     * Timestamp of when the tag was created.
     * Example: "2025-03-10T09:15:00Z"
     * Format: date-time
     */
    public string $createdAt;
    /**
     * Unique identifier of the tag.
     * Example: "c56a4180-65aa-42ec-a945-5fd21dec0538"
     * Format: uuid
     */
    public string $id;
    /**
     * Timestamp of when the tag was last updated.
     * Example: "2025-06-15T14:20:00Z"
     * Format: date-time
     */
    public string $lastUpdatedAt;
    /**
     * Name of the tag.
     * Example: "sms"
     */
    public string $name;
    /**
     * Number of articles and attachments tagged with this tag.
     * Example: 8
     * Format: int32
     */
    public int $referencesCount {
        set {
            $this->assigning('referencesCount', $value);
            $this->referencesCount = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'createdAt' => is_string($value) ? $this->createdAt = $value : parent::assignMember($name, $value),
            'id' => is_string($value) ? $this->id = $value : parent::assignMember($name, $value),
            'lastUpdatedAt' => is_string($value) ? $this->lastUpdatedAt = $value : parent::assignMember($name, $value),
            'name' => is_string($value) ? $this->name = $value : parent::assignMember($name, $value),
            'referencesCount' => is_int($value) ? $this->referencesCount = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
