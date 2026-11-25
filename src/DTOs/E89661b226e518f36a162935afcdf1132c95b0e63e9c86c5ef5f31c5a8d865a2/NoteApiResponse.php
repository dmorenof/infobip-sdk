<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\E89661b226e518f36a162935afcdf1132c95b0e63e9c86c5ef5f31c5a8d865a2;

/**
 * NoteApiResponse
 * Example: {"agentId":"1367466e-7e5d-40d7-a78a-ace2780ed3dd","content":"Sample Note content"}
 */
final class NoteApiResponse extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Id of the author agent.
     */
    public string $agentId;
    /**
     * Note content, which can be any text up to 4000 characters.
     */
    public string $content;
    /**
     * Id of the conversation holding the note.
     */
    public string $conversationId;
    /**
     * Time stamp when note is created.
     * Format: date-time
     */
    public string $createdAt;
    /**
     * Note Id
     */
    public string $id;
    public \InfobipSDK\Enums\E89661b226e518f36a162935afcdf1132c95b0e63e9c86c5ef5f31c5a8d865a2\NoteType $type;
    /**
     * Time stamp when note is updated.
     * Format: date-time
     */
    public string $updatedAt;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'agentId' => is_string($value) ? $this->agentId = $value : parent::assignMember($name, $value),
            'content' => is_string($value) ? $this->content = $value : parent::assignMember($name, $value),
            'conversationId' => is_string($value) ? $this->conversationId = $value : parent::assignMember($name, $value),
            'createdAt' => is_string($value) ? $this->createdAt = $value : parent::assignMember($name, $value),
            'id' => is_string($value) ? $this->id = $value : parent::assignMember($name, $value),
            'type' => is_string($value) ? $this->type = \InfobipSDK\Enums\E89661b226e518f36a162935afcdf1132c95b0e63e9c86c5ef5f31c5a8d865a2\NoteType::from($value) : parent::assignMember($name, $value),
            'updatedAt' => is_string($value) ? $this->updatedAt = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
