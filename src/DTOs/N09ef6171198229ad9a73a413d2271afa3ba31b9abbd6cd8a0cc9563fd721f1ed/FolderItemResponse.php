<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N09ef6171198229ad9a73a413d2271afa3ba31b9abbd6cd8a0cc9563fd721f1ed;

/**
 * FolderItemResponse
 *
 * The list of the results for this page.
 */
final class FolderItemResponse extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'breadCrumbList',
        'id',
        'name',
    ];

    /**
     * Breadcrumb path from root to this folder.
     * Example: ["API Guides","SMS","Getting Started"]
     */
    public \InfobipSDK\Collections\StringCollection $breadCrumbList;
    /**
     * Unique identifier of the folder.
     * Example: "3fa85f64-5717-4562-b3fc-2c963f66afa6"
     * Format: uuid
     */
    public string $id;
    /**
     * Name of the folder.
     * Example: "Getting Started"
     */
    public string $name;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'breadCrumbList' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->breadCrumbList = new \InfobipSDK\Collections\StringCollection($value) : parent::assignMember($name, $value),
            'id' => is_string($value) ? $this->id = $value : parent::assignMember($name, $value),
            'name' => is_string($value) ? $this->name = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
