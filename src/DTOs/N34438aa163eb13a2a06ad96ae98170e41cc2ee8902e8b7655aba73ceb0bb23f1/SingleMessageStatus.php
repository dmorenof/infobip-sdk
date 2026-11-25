<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N34438aa163eb13a2a06ad96ae98170e41cc2ee8902e8b7655aba73ceb0bb23f1;

/**
 * SingleMessageStatus
 *
 * Indicates the message status.
 */
final class SingleMessageStatus extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'description',
    'groupId',
    'groupName',
    'id',
    'name',
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
     * Status description.
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
     * Status group name.
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
            'description' => is_string($value) ? $this->description = $value : parent::assignMember($name, $value),
            'groupId' => is_int($value) ? $this->groupId = $value : parent::assignMember($name, $value),
            'groupName' => is_string($value) ? $this->groupName = $value : parent::assignMember($name, $value),
            'id' => is_int($value) ? $this->id = $value : parent::assignMember($name, $value),
            'name' => is_string($value) ? $this->name = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
