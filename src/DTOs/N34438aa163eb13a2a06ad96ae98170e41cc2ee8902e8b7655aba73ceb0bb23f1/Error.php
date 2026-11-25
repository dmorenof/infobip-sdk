<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N34438aa163eb13a2a06ad96ae98170e41cc2ee8902e8b7655aba73ceb0bb23f1;

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

    public string $description;
    /**
     * Format: int32
     */
    public int $groupId {
        set {
            $this->assigning('groupId', $value);
            $this->groupId = $value;
        }
    }
    public string $groupName;
    /**
     * Format: int32
     */
    public int $id {
        set {
            $this->assigning('id', $value);
            $this->id = $value;
        }
    }
    public string $name;
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
