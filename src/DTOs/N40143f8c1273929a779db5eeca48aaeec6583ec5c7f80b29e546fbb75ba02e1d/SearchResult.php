<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N40143f8c1273929a779db5eeca48aaeec6583ec5c7f80b29e546fbb75ba02e1d;

/**
 * SearchResult
 */
final class SearchResult extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * User's action.
     */
    public ?string $action;
    /**
     * Description of an action.
     */
    public ?string $description;
    /**
     * Unique ID of an action.
     */
    public ?string $id;
    /**
     * User's IP Address.
     */
    public ?string $ipAddress;
    /**
     * Entity on which action is executed.
     */
    public ?string $item;
    /**
     * Exact time when user executed an action.
     * Format: date-time
     */
    public string $timestamp;
    /**
     * Username of the user who executed the action.
     */
    public ?string $username;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'action' => $value === null || is_string($value) ? $this->action = $value : parent::assignMember($name, $value),
            'description' => $value === null || is_string($value) ? $this->description = $value : parent::assignMember($name, $value),
            'id' => $value === null || is_string($value) ? $this->id = $value : parent::assignMember($name, $value),
            'ipAddress' => $value === null || is_string($value) ? $this->ipAddress = $value : parent::assignMember($name, $value),
            'item' => $value === null || is_string($value) ? $this->item = $value : parent::assignMember($name, $value),
            'timestamp' => is_string($value) ? $this->timestamp = $value : parent::assignMember($name, $value),
            'username' => $value === null || is_string($value) ? $this->username = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
