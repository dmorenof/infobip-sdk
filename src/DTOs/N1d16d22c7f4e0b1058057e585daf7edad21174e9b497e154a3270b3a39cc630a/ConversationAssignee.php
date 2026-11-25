<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N1d16d22c7f4e0b1058057e585daf7edad21174e9b497e154a3270b3a39cc630a;

/**
 * ConversationAssignee
 *
 * Conversation assignee data.
 */
final class ConversationAssignee extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Agent email address.
     * Example: "agent&#64;example.com"
     */
    public string $email;
    /**
     * Agent ID. UUID v4.
     * Example: "fbcfe58e-a5c3-3a80-b569-f631dbb27c41"
     */
    public string $id;
    /**
     * Agent name.
     * Example: "Agent Name"
     */
    public string $name;
    /**
     * Agent role.
     * Example: "AGENT"
     */
    public \InfobipSDK\Enums\N1d16d22c7f4e0b1058057e585daf7edad21174e9b497e154a3270b3a39cc630a\ConversationAssignee\RoleEnum $role;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'email' => is_string($value) ? $this->email = $value : parent::assignMember($name, $value),
            'id' => is_string($value) ? $this->id = $value : parent::assignMember($name, $value),
            'name' => is_string($value) ? $this->name = $value : parent::assignMember($name, $value),
            'role' => is_string($value) ? $this->role = \InfobipSDK\Enums\N1d16d22c7f4e0b1058057e585daf7edad21174e9b497e154a3270b3a39cc630a\ConversationAssignee\RoleEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
