<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N382231ebb2fc250c93965563ed41f4ba8228460e52f6052a582e69b931876454;

/**
 * MessageStatus
 *
 * Indicates the [status](https://www.infobip.com/docs/essentials/response-status-and-error-codes#api-status-codes) of the message and how to recover from an error should there be any.
 */
final class MessageStatus extends \Dmorenof\SdkRuntime\DTO
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
     * Action to take to recover from the error.
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
    public \InfobipSDK\Enums\N382231ebb2fc250c93965563ed41f4ba8228460e52f6052a582e69b931876454\MessageGeneralStatus $groupName;
    /**
     * Status code ID.
     * Format: int32
     */
    public int $id {
        set {
            $this->assigning('id', $value);
            $this->id = $value;
        }
    }
    /**
     * [Status code](https://www.infobip.com/docs/essentials/response-status-and-error-codes#api-status-codes) name.
     */
    public string $name;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'action' => is_string($value) ? $this->action = $value : parent::assignMember($name, $value),
            'description' => is_string($value) ? $this->description = $value : parent::assignMember($name, $value),
            'groupId' => is_int($value) ? $this->groupId = $value : parent::assignMember($name, $value),
            'groupName' => is_string($value) ? $this->groupName = \InfobipSDK\Enums\N382231ebb2fc250c93965563ed41f4ba8228460e52f6052a582e69b931876454\MessageGeneralStatus::from($value) : parent::assignMember($name, $value),
            'id' => is_int($value) ? $this->id = $value : parent::assignMember($name, $value),
            'name' => is_string($value) ? $this->name = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
