<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\Be899aa87631e28acaf5aa6d4ae5df630595a5bf087810b506602819a5d8b742;

/**
 * PushStatusResponse
 *
 * Message status.
 */
final class PushStatusResponse extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'groupId',
    'groupName',
    'id',
    'name',
];

    /**
     * Human readable description of the status.
     */
    public string $description;
    /**
     * Status group ID.
     * Format: int64
     */
    public int $groupId;
    /**
     * Status group name.
     */
    public string $groupName;
    /**
     * Status ID.
     * Format: int64
     */
    public int $id;
    /**
     * Status name.
     */
    public string $name;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'description' => is_string($value) ? $this->description = $value : parent::assignMember($name, $value),
            'groupId' => is_int($value) ? $this->groupId = $value : parent::assignMember($name, $value),
            'groupName' => is_string($value) ? $this->groupName = $value : parent::assignMember($name, $value),
            'id' => is_int($value) ? $this->id = $value : parent::assignMember($name, $value),
            'name' => is_string($value) ? $this->name = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
