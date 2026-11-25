<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N1d16d22c7f4e0b1058057e585daf7edad21174e9b497e154a3270b3a39cc630a;

/**
 * ConversationQueue
 *
 * Conversation queue data.
 */
final class ConversationQueue extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Queue ID. UUID v4.
     * Example: "35b5e5b7-ac4a-40dc-872f-2a1403bcd770"
     */
    public string $id;
    /**
     * Queue name.
     * Example: "Queue Name"
     */
    public string $name;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'id' => is_string($value) ? $this->id = $value : parent::assignMember($name, $value),
            'name' => is_string($value) ? $this->name = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
