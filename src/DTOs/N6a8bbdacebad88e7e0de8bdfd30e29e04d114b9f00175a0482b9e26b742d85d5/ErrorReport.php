<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N6a8bbdacebad88e7e0de8bdfd30e29e04d114b9f00175a0482b9e26b742d85d5;

/**
 * ErrorReport
 *
 * Indicates whether the error occurred during the query execution.
 */
final class ErrorReport extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'description',
        'groupId',
        'groupName',
        'id',
        'name',
        'permanent',
    ];

    protected const array VALIDATION = [
        'groupId' => [
            'format' => 'int32',
        ],
        'id' => [
            'format' => 'int32',
        ],
    ];

    /**
     * Human-readable description of the error.
     * Example: "No Error"
     */
    public string $description;
    /**
     * Error group ID.
     * Example: 0
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
     * Example: "OK"
     */
    public string $groupName;
    /**
     * Error ID.
     * Example: 0
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
     * Example: "NO_ERROR"
     */
    public string $name;
    /**
     * Indicator of whether the error is permanent.
     * Example: false
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
