<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N1d16d22c7f4e0b1058057e585daf7edad21174e9b497e154a3270b3a39cc630a;

/**
 * ConversationForm
 *
 * Conversation form data.
 */
final class ConversationForm extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Form ID. UUID v4.
     * Example: "5f50cbf1-476f-4b4d-ba2d-7adacdc8f77f"
     */
    public string $id;
    /**
     * Form name.
     * Example: "Title"
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
