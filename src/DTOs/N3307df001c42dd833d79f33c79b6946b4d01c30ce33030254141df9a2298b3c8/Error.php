<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N3307df001c42dd833d79f33c79b6946b4d01c30ce33030254141df9a2298b3c8;

/**
 * Error
 */
final class Error extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
    'groupId' => [
        'format' => 'int32',
    ],
    'id' => [
        'format' => 'int32',
    ],
];

    protected const array WRITE_ONLY_FIELDS = [
    'description',
    'groupId',
    'groupName',
    'id',
    'name',
    'permanent',
];

    /**
     * Human-readable description of the error.
     */
    public string $description;
    /**
     * Error group ID.
     * Format: int32
     */
    public int $groupId {
        set {
            $this->assigning('groupId', $value);
            $this->groupId = $value;
        }
    }
    /**
     * Error group name.
     */
    public string $groupName;
    /**
     * Error ID.
     * Format: int32
     */
    public int $id {
        set {
            $this->assigning('id', $value);
            $this->id = $value;
        }
    }
    /**
     * Error name.
     */
    public string $name;
    /**
     * Indicates whether the error is permanent.
     */
    public bool $permanent;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'description' => is_string($value) ? $this->description = $value : parent::assignMember($name, $value),
            'groupId' => is_int($value) ? $this->groupId = $value : parent::assignMember($name, $value),
            'groupName' => is_string($value) ? $this->groupName = $value : parent::assignMember($name, $value),
            'id' => is_int($value) ? $this->id = $value : parent::assignMember($name, $value),
            'name' => is_string($value) ? $this->name = $value : parent::assignMember($name, $value),
            'permanent' => is_bool($value) ? $this->permanent = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
