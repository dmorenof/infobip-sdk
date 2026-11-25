<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\Fccfa6f52b47dd30d36e2c1fad9bb5d494251b453352b21aeb7a407c6f1eeb5c;

/**
 * Status
 *
 * Indicates whether the message is successfully sent, not sent, delivered, not delivered, waiting for delivery or any other possible status.
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

    /**
     * [Action](https://www.infobip.com/docs/essentials/response-status-and-error-codes#http-status-codes) that should be taken to eliminate the error.
     */
    public string $action;
    /**
     * Human-readable [description](https://www.infobip.com/docs/essentials/response-status-and-error-codes#http-status-codes) of the status.
     */
    public string $description;
    /**
     * Status [group ID](https://www.infobip.com/docs/essentials/response-status-and-error-codes#http-status-codes).
     * Format: int32
     */
    public int $groupId {
        set {
            $this->assigning('groupId', $value);
            $this->groupId = $value;
        }
    }
    /**
     * Status [group name](https://www.infobip.com/docs/essentials/response-status-and-error-codes#http-status-codes).
     */
    public string $groupName;
    /**
     * Status [ID](https://www.infobip.com/docs/essentials/response-status-and-error-codes#http-status-codes).
     * Format: int32
     */
    public int $id {
        set {
            $this->assigning('id', $value);
            $this->id = $value;
        }
    }
    /**
     * Status [name](https://www.infobip.com/docs/essentials/response-status-and-error-codes#http-status-codes).
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
