<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\E89661b226e518f36a162935afcdf1132c95b0e63e9c86c5ef5f31c5a8d865a2;

/**
 * NoteResultPage
 * Example: {"notes":[{"id":"9bdb00a1-70f8-4838-ae4b-58fa3e7c93b4","conversationId":"4461ea29-c09e-4ba8-a751-df86cf0a0eb9","agentId":"c856e230-a8cd-498b-9996-42bbed35029a","type":"INTERNAL","content":"Note content 1","createdAt":"2024-01-01T00:00:00.000+00:00","updatedAt":"2024-01-01T00:00:00.000+00:00"},{"id":"10ae8597-029d-4d6b-bf9f-d22c67b4fa42","conversationId":"4461ea29-c09e-4ba8-a751-df86cf0a0eb9","agentId":"c856e230-a8cd-498b-9996-42bbed35029a","type":"INTERNAL","content":"Note content 2","createdAt":"2024-01-01T00:00:00.000+00:00","updatedAt":"2024-01-01T00:00:00.000+00:00"}],"pagination":{"totalItems":2,"page":0,"limit":10,"orderBy":"id:ASC"}}
 */
final class NoteResultPage extends \Dmorenof\SdkRuntime\DTO
{
    public \InfobipSDK\Collections\E89661b226e518f36a162935afcdf1132c95b0e63e9c86c5ef5f31c5a8d865a2\NoteResultPage\NotesCollection $notes;
    public \InfobipSDK\DTOs\E89661b226e518f36a162935afcdf1132c95b0e63e9c86c5ef5f31c5a8d865a2\Pagination $pagination;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'notes' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->notes = new \InfobipSDK\Collections\E89661b226e518f36a162935afcdf1132c95b0e63e9c86c5ef5f31c5a8d865a2\NoteResultPage\NotesCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \InfobipSDK\DTOs\E89661b226e518f36a162935afcdf1132c95b0e63e9c86c5ef5f31c5a8d865a2\NoteApiResponse::class)) : parent::assignMember($name, $value),
            'pagination' => $value instanceof \stdClass ? $this->pagination = new \InfobipSDK\DTOs\E89661b226e518f36a162935afcdf1132c95b0e63e9c86c5ef5f31c5a8d865a2\Pagination($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
