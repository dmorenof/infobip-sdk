<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\Fccfa6f52b47dd30d36e2c1fad9bb5d494251b453352b21aeb7a407c6f1eeb5c;

/**
 * Error
 *
 * Indicates whether the error occurred during the query execution.
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

    /**
     * Human-readable [description](https://www.infobip.com/docs/essentials/response-status-and-error-codes#error-codes) of the error.
     */
    public string $description;
    /**
     * Error [group ID](https://www.infobip.com/docs/essentials/response-status-and-error-codes#error-codes).
     * Format: int32
     */
    public int $groupId {
        set {
            $this->assigning('groupId', $value);
            $this->groupId = $value;
        }
    }
    /**
     * Error [group name](https://www.infobip.com/docs/essentials/response-status-and-error-codes#error-codes).
     */
    public string $groupName;
    /**
     * Error [ID](https://www.infobip.com/docs/essentials/response-status-and-error-codes#error-codes).
     * Format: int32
     */
    public int $id {
        set {
            $this->assigning('id', $value);
            $this->id = $value;
        }
    }
    /**
     * Error [name](https://www.infobip.com/docs/essentials/response-status-and-error-codes#error-codes).
     */
    public string $name;
    /**
     * Tells if the error [is permanent](https://www.infobip.com/docs/essentials/response-status-and-error-codes#error-codes).
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
