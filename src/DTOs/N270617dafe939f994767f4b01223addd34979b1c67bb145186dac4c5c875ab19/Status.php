<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N270617dafe939f994767f4b01223addd34979b1c67bb145186dac4c5c875ab19;

/**
 * Status
 *
 * Indicates whether the message is successfully sent, not sent, delivered, not delivered, waiting for delivery, or any other possible status.
 */
final class Status extends \Dmorenof\SdkRuntime\DTO
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
     * Example: "Message accepted, pending for delivery."
     */
    public string $description;
    /**
     * Status group ID.
     * Example: 1
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
     * Example: "PENDING"
     */
    public string $groupName;
    /**
     * Status ID.
     * Example: 26
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
     * Example: "PENDING_ACCEPTED"
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
