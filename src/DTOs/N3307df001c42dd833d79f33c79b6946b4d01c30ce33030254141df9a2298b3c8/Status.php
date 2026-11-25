<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N3307df001c42dd833d79f33c79b6946b4d01c30ce33030254141df9a2298b3c8;

/**
 * Status
 */
final class Status extends \Dmorenof\SdkRuntime\DTO
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
        'action',
        'description',
        'groupId',
        'groupName',
        'id',
        'name',
    ];

    /**
     * Action that should be taken to fix the error.
     */
    public string $action;
    /**
     * Human-readable description of the status.
     */
    public string $description;
    /**
     * Status group ID.
     * Format: int32
     */
    public int $groupId {
        set {
            $this->assigning('groupId', $value);
            $this->groupId = $value;
        }
    }
    /**
     * Group name for the status.
     */
    public string $groupName;
    /**
     * Status ID.
     * Format: int32
     */
    public int $id {
        set {
            $this->assigning('id', $value);
            $this->id = $value;
        }
    }
    /**
     * Status name.
     */
    public string $name;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'action' => is_string($value) ? $this->action = $value : parent::assignMember($name, $value),
            'description' => is_string($value) ? $this->description = $value : parent::assignMember($name, $value),
            'groupId' => is_int($value) ? $this->groupId = $value : parent::assignMember($name, $value),
            'groupName' => is_string($value) ? $this->groupName = $value : parent::assignMember($name, $value),
            'id' => is_int($value) ? $this->id = $value : parent::assignMember($name, $value),
            'name' => is_string($value) ? $this->name = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
